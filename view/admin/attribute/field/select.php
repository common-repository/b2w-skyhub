<?php /** @var \B2W\SkyHub\View\Admin\Attribute\Field\Select $this */ ?>
<select name="<?php echo $this->getName() ?>"<?php if ($this->getId()): ?> id="<?php echo $this->getId() ?>"<?php endif ?> style="min-width: 120px;">
    <option value=""></option>
    <?php foreach ($this->getOptions() as $attr): ?>
        <?php
            $value  = is_array($attr) ? $attr['value'] : $attr;
            $label  = is_array($attr) ? $attr['label'] : $attr;
        ?>
        ?>
        <option value="<?php echo $value ?>"<?php if ($value == $this->getValue()): ?> selected<?php endif ?>>
            <?php echo $label ?>
        </option>
    <?php endforeach ?>
</select>
<?php if ($this->getNote()): ?>
    <small><br /><?php echo $this->getNote() ?></small>
<?php endif ?>