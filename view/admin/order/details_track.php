<?php
$domain = \B2W\SkyHub\View\Admin\Admin::DOMAIN;
$code = $this->getOrder()->getShipments()->getTracks()->getCode();
$url = $this->getOrder()->getShipments()->getTracks()->getUrl();
$method = $this->getOrder()->getShipments()->getTracks()->getMethod();
$carrier = $this->getOrder()->getShipments()->getTracks()->getCarrier();
?>

<p class='form-field form-field-wide'>
    <label for='_skyhub_order_shipping_method'><?php echo __('Tracking Method', $domain);?>: </label>
    <?php if ($this->isEditable() && !$this->getOrder()->isB2WEntregas()){?>
        <input type='text' name='_skyhub_order_shipping_method' style='width: 400px;' value='<?php echo $method;?>'/>
    <?php } else {
        echo $method;
    }
    ?>
</p>

<p class='form-field form-field-wide'>
    <label for='_skyhub_order_shipping_carrier'><?php echo __('Tracking Carrier', $domain);?>: </label>
    <?php if ($this->isEditable() && !$this->getOrder()->isB2WEntregas()){?>
        <input type='text' name='_skyhub_order_shipping_carrier' style='width: 400px;' value='<?php echo $carrier;?>'/>
    <?php } else {
        echo $carrier;
    }
    ?>
</p>

<p class='form-field form-field-wide'>
    <label for='_skyhub_order_shipping_url'><?php echo __('Tracking Url', $domain);?>: </label>
    <?php if ($this->isEditable() && !$this->getOrder()->isB2WEntregas()){?>
        <input type='text' name='_skyhub_order_shipping_url' style='width: 400px;' value='<?php echo $url;?>'/>
    <?php } else {
        echo $url;
    }
    ?>
</p>

<p class='form-field form-field-wide'>
    <label for='_skyhub_order_shipping_code'><?php echo __('Tracking Code', $domain);?>: </label>
    <?php if ($this->isEditable() && !$this->getOrder()->isB2WEntregas()){?>
        <input type='text' name='_skyhub_order_shipping_code' style='width: 400px;' value='<?php echo $code;?>'/>
    <?php } else {
        echo $code;
    }
    ?>
</p>