<div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
    <form id="formQueue" action="<?php echo esc_html(admin_url('admin-post.php')); ?>" method="POST">
        <?php $this->table() ?>
        <input type="hidden" id="page" name="page"/>
        <?php wp_referer_field();?>
        <input 
            type="button" 
            class='button button-primary button-large' 
            onclick="submitQueue(
                        '<?=__('Do you realy want to execute your queue?', \B2W\SkyHub\View\Admin\Admin::DOMAIN)?>',
                        '<?=B2W\SkyHub\View\Admin\Admin::SLUG_QUEUE_INTEGRATION_SKYHUB_EXECUTE?>'
                    );"
            value="<?=__('Execute Queue', \B2W\SkyHub\View\Admin\Admin::DOMAIN)?>"
        />
        <input 
            type="button" 
            class='button button-primary button-large' 
            onclick="submitQueue(
                        '<?=__('Do you realy want to clear your queue?', \B2W\SkyHub\View\Admin\Admin::DOMAIN)?>',
                        '<?=B2W\SkyHub\View\Admin\Admin::SLUG_QUEUE_INTEGRATION_SKYHUB_LIST?>'
                    );"
            value="<?=__('Clear Queue', \B2W\SkyHub\View\Admin\Admin::DOMAIN)?>"
        />
    </form>
</div>

<script>
    function submitQueue(msg, page)
    {
        if (window.confirm(msg))
        {
            if (document.getElementById('page')) {
                document.getElementById('page').value = page;
            }

            if (document.getElementById('formQueue')) {
                document.getElementById('formQueue').submit();
            }
        }
    }

    function selectQueueAll()
    {
        var select = document.getElementsByClassName('itemQueue');
        if (!select) {
            return false;
        }

        var checked = true;
        if (document.getElementById('itemQueueAll')) {
            checked = document.getElementById('itemQueueAll').checked;
        }

        for (var i in select) {
            select[i].checked = checked;
        }
    }
</script>
