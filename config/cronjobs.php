<?php

$order = new \B2W\SkyHub\Model\Cron\Order\Integration();
$product = new \B2W\SkyHub\Model\Cron\Product\Integration();
$settingsAPI = new \B2W\SkyHub\Model\Entity\SettingsApiEntity();
$settingsAPI->map();

return array(
    array(
        'timestamp' => time(),
        'recurrence' => $settingsAPI->getOrderIntegration(),
        'hook' => 'b2w_skyhub_order_inegration',
        'jobs' => array(
            $order,
            'execute'
        )
    ),
    array(
        'timestamp' => time(),
        'recurrence' =>  $settingsAPI->getOrderIntegrationApi(),
        'hook' => 'b2w_skyhub_order_inegration_api',
        'jobs' => array(
            $order,
            'executeApi'
        )
    ),
    array(
        'timestamp' => time(),
        'recurrence' => $settingsAPI->getProductIntegration(),
        'hook' => 'b2w_skyhub_product_inegration',
        'jobs' => array(
            $product,
            'execute'
        )
    )
);