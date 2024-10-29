<?php

return array(
    'name'              => array(
        'skyhub'    => 'name',
        'wordpress' => 'order_item_name'
    ),
    'qty'               => array(
        'skyhub'    => 'qty',
        'wordpress' => '_qty'
    ),
    'original_price'    => array(
        'skyhub'    => 'original_price',
        'wordpress' => '_line_subtotal',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Item\Misc\OriginalPrice::class
        )
    ),
    'special_price'     => array(
        'skyhub'    => 'special_price',
        'wordpress' => '_skyhub_special_price'
    ),
    'shipping_cost'     => array(
        'skyhub'    => 'shipping_cost',
        'wordpress' => '_skyhub_shipping_cost'
    ),
    'order_item_type'   => array(
        'skyhub'    => 'order_item_type',
        'wordpress' => 'order_item_type',
    ),
    'order_id'          => array(
        'skyhub'    => 'order_id',
        'wordpress' => 'order_id',
    ),
    'product_id'        => array(
        'wordpress' => '_product_id',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Item\Misc\ProductId::class
        )
    ),
    'variation_id'      => array(
        'wordpress' => '_variation_id',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Item\Misc\VariationId::class
        )
    ),
    'tax_class'         => array(
        'wordpress' => '_tax_class',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Item\Misc\TaxClass::class
        )
    ),
    'line_subtotal_tax' => array(
        'wordpress' => '_line_subtotal_tax',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Item\Misc\LineSubtotalTax::class
        )
    ),
    'line_total'        => array(
        'wordpress' => '_line_total',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Item\Misc\LineTotal::class
        )
    ),
    'line_tax'          => array(
        'wordpress' => '_line_tax',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Item\Misc\LineTax::class
        )
    ),
    'product_attribute' => array(
        'mapper' => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Item\Misc\ProductAttribute::class
        )
    ),
);
