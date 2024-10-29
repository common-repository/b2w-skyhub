<?php

return array(
    array(
        'event'  => 'bulk_actions-edit-product',
        'class'  => \B2W\SkyHub\Controller\Product::class,
        'method' => 'addBulkActions'
    ),
    array(
        'event'  => 'handle_bulk_actions-edit-product',
        'class'  => \B2W\SkyHub\Controller\Product::class,
        'method' => 'integrationProductSkyHub'
    ),
    array(
        'event'  => 'add_wp_cron_schedules',
        'class'  => \B2W\SkyHub\Model\Cron\Jobs::class,
        'method' => 'add_wp_cron_schedules'
    )
);