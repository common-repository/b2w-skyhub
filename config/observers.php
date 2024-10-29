<?php

return array(
    array(
        'admin'  => true,
        'event'  => 'admin_post',
        'class'  => \B2W\SkyHub\Controller\Admin\SettingsApi::class,
        'method' => 'save'
    ),
    array(
        'admin'  => true,
        'event'  => 'admin_menu',
        'class'  => B2W\SkyHub\View\Admin\Admin::class,
        'method' => 'menu'
    ),
    array(
        'admin'  => true,
        'event'  => 'admin_post',
        'class'  => \B2W\SkyHub\Controller\Admin\Attribute::class,
        'method' => 'save'
    ),
    array(
        'admin'  => true,
        'event'  => 'admin_post',
        'class'  => \B2W\SkyHub\Controller\Admin\Status::class,
        'method' => 'save'
    ),
    array(
        'event'  => 'woocommerce_order_status_changed',
        'class'  => \B2W\SkyHub\Controller\Order::class,
        'method' => 'update'
    ),
    array(
        'event'  => 'woocommerce_update_order',
        'class'  => \B2W\SkyHub\Controller\Order::class,
        'method' => 'updateInvoice'
    ),
    array(
        'admin'  => true,
        'event'  => 'add_meta_boxes',
        'class'  => \B2W\SkyHub\View\Admin\Order::class,
        'method' => 'init'
    ),
    array(
        'event'  => 'woocommerce_update_product',
        'class'  => B2W\SkyHub\Controller\Product::class,
        'method' => 'onSave'
    ),
    array(
        'event'  => 'woocommerce_new_product',
        'class'  => B2W\SkyHub\Controller\Product::class,
        'method' => 'onSave'
    ),
    array(
        'admin'  => true,
        'event'  => 'woocommerce_update_order',
        'class'  => \B2W\SkyHub\Controller\Order::class,
        'method' => 'saveTrack'
    ),
    array(
        'admin'  => true,
        'event'  => 'woocommerce_update_order',
        'class'  => \B2W\SkyHub\Controller\Order::class,
        'method' => 'sendInvoiceXmlToSkyhub'
    ),
    array(
        'event'  => 'woocommerce_product_set_stock',
        'class'  => B2W\SkyHub\Controller\Product::class,
        'method' => 'onSaveStockOrder'
    ),
    array(
        'event'  => 'woocommerce_variation_set_stock',
        'class'  => B2W\SkyHub\Controller\Product::class,
        'method' => 'onSaveStockOrder'
    ),
    array(
        'admin'  => true,
        'event'  => 'admin_post',
        'class'  => \B2W\SkyHub\Controller\Admin\SetupQueue::class,
        'method' => 'save'
    ),
    array(
        'admin'  => true,
        'event'  => 'admin_post',
        'class'  => \B2W\SkyHub\Controller\Admin\SetupQueue::class,
        'method' => 'executeQueue'
    )
);
