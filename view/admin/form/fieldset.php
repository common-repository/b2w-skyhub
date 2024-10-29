<?php /** @var \B2W\SkyHub\View\Admin\Form\Fieldset $this */ 
$domain = isset($domain) ? $domain : null;
?>
<div>
    <h2><?php echo __($this->getTitle(), $domain) ?></h2>
    <?php /** @var \B2W\SkyHub\View\Admin\Form\Field\FieldAbstract $field */ ?>
    <table>
    <?php foreach ($this->getFields() as $field): ?>
    <tr>
        <td style="vertical-align: top;width: 200px;padding-bottom: 50px;">
            <?php if ($field->getLabel()): ?>
            <label for="<?php echo $field->getId() ?>"><?php echo $field->getLabel() ?></label>
            <?php endif ?>
        </td>
        <td style="vertical-align: top;width: 250px;padding-bottom: 50px;">
            <?php $field->render() ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</div>