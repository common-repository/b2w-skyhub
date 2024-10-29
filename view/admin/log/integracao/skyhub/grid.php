<h1>Logs de Erros</h1>
<table class="wp-list-table widefat fixed striped posts">
    <thead>
        <tr>
            <th><?php echo __("ID", \B2W\SkyHub\View\Admin\Admin::DOMAIN);?></th>
            <th><?php echo __("Message", \B2W\SkyHub\View\Admin\Admin::DOMAIN);?></th>
            <th><?php echo __("Level", \B2W\SkyHub\View\Admin\Admin::DOMAIN);?></th>
            <th><?php echo __("Date Created", \B2W\SkyHub\View\Admin\Admin::DOMAIN);?></th>
        </tr>
    </thead>
    <tbody>
        <?php echo $this->getDatas();?>
    </tbody>
</table>