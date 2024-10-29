<div class="admin__field">
    <p>
    <?php echo $this->getOrder()->getCode();?>
    </p>
    <p class='form-field form-field-wide'>
        <label for='volume_qty' class="admin__field-label"><?=_('Volume Qty')?>: </label>
        <input type="text" name="volume_qty" id="volume_qty" style="width: 400px;" />
    </p>
    
    <p class='form-field form-field-wide'>
        <label for='file' class="admin__field-label"><?=_('File Xml')?>: </label>
        <input type="file" name="file" id="file"/>
    </p>
    <p class='form-field form-field-wide'>
        <input onclick="sendXmlSkyhub();" type="button" class="button button-primary calculate-action" value="<?=_('Send Xml to SkyHub')?>"/>
    </p>
</div>

<script type="text/javascript">
    var qty = document.getElementById("volume_qty");
    qty.onkeypress = function(event) {
        event = event || window.event;
        if (/^\s*-?\d*(\.\d*)?\s*$/.test(event.key)== false) {
            return false;
        }
    }

    function sendXmlSkyhub() {
        var post = document.getElementById("post");
        post.setAttribute('enctype', 'multipart/form-data');
        post.submit();
    }
</script>