<?php /** @var \B2W\SkyHub\View\Admin\Attribute\Field\Text $this */ ?>
<input type="text" name="<?php echo $this->getName() ?>"<?php if ($this->getId()): ?> id="<?php echo $this->getId() ?>"<?php endif ?>
    value="<?php echo $this->getValue() ?>"/>
<?php if ($this->getNote()): ?>
    <small><br /><?php echo $this->getNote() ?></small>
<?php endif ?>