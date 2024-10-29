<?php /** @var \B2W\SkyHub\View\Admin\Order $this */ ?>
<?php 
$invoice = $this->getOrder()->getInvoices()->first();
$key = ($invoice ? $invoice->getKey() : null);
$domain = \B2W\SkyHub\View\Admin\Admin::DOMAIN;
?>
<?php echo $this->getOrder()->getCode();?>
<p class='form-field form-field-wide'>
    <label for='key'><?php echo __('Invoice Number', $domain);?>: </label>
    <?php if ($this->isEditable()){?>
        <input type='text' onblur="validateInvoiceKey(this);" id='key' name='key' maxlength="44" style='width: 400px;' value='<?php echo $key;?>'/>
    <?php } else {
        echo $key;
    }
    ?>
</p>

<script>
function validateInvoiceKey(obj) {
    var key = obj.value;
    if (key.length == 0) {
        return;
    }

    if (key.length < 44) {
        obj.value = '';
        alert('<?php echo __('Invoice number need 44 char', $domain);?>');
    }
}
</script>