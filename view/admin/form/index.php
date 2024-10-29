<?php $domain = \B2W\Skyhub\View\Admin\Admin::DOMAIN ?>
<?php /** @var $this \B2W\Skyhub\View\Admin\Form\FormAbstract */ ?>
<div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>

    <?php settings_errors(); ?>

    <form method="post" action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
        <div id="universal-message-container">

            <?php /** @var \B2W\SkyHub\View\Admin\Form\Fieldset $fieldset */ ?>
            <?php foreach ($this->getFieldsets() as $fieldset): ?>
                <?php $fieldset->render() ?>
            <?php endforeach ?>

            <?php
            wp_nonce_field(
                $this->nonce('action'),
                $this->nonce('field')
            );
            submit_button();
            ?>
    </form>
</div>
