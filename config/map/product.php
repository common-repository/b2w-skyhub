<?php

return array(
    'id'                   => array(
        'skyhub'        => 'id',
        'wordpress'     => 'ID',
        'label'         => 'Product ID',
        'show_in_admin' => false
    ),
    'sku'                  => array(
        'skyhub'    => 'sku',
        'label'     => 'Product SKU',
        'wordpress' => '_sku'
    ),
    'name'                 => array(
        'skyhub'    => 'name',
        'label'     => 'Product Name',
        'wordpress' => 'post_title'
    ),
    'description'          => array(
        'skyhub'    => 'description',
        'label'     => 'Product Description',
        'wordpress' => 'post_content'
    ),
    'status'               => array(
        'skyhub'    => 'status',
        'label'     => 'Product Status',
        'wordpress' => 'post_status'
    ),
    'qty'                  => array(
        'skyhub'    => 'qty',
        'label'     => 'Product Stock Quantity',
        'wordpress' => '_stock'
    ),
    'price'                => array(
        'skyhub'    => 'price',
        'label'     => 'Product Price',
        'wordpress' => '_price',
        'mapper'    => array(
            'db_to_entity' => \B2W\SkyHub\Model\Transformer\Product\Price\DbToEntity::class
        )
    ),
    'promotional_price'    => array(
        'skyhub'    => 'promotional_price',
        'label'     => 'Product Promotional Price',
        'wordpress' => '_promotional_price',
        'mapper' => array(
            'db_to_entity'  => \B2W\SkyHub\Model\Transformer\Product\PromotionalPrice\DbToEntity::class,
            'entity_to_api' => \B2W\SkyHub\Model\Transformer\Product\PromotionalPrice\EntityToApi::class
        )
    ),
    'cost'                 => array(
        'skyhub'    => 'cost',
        'label'     => 'Product Cost',
        'wordpress' => ''
    ),
    'weight'               => array(
        'skyhub'    => 'weight',
        'label'     => 'Product Weight',
        'wordpress' => '_weight'
    ),
    'height'               => array(
        'skyhub'    => 'height',
        'label'     => 'Product Height',
        'wordpress' => '_height'
    ),
    'width'                => array(
        'skyhub'    => 'width',
        'label'     => 'Product Width',
        'wordpress' => '_width'
    ),
    'length'               => array(
        'skyhub'    => 'length',
        'label'     => 'Product Length',
        'wordpress' => '_length'
    ),
    'brand'                => array(
        'skyhub'    => 'brand',
        'label'     => 'Product Brand',
        'wordpress' => ''
    ),
    'ean'                  => array(
        'skyhub'    => 'ean',
        'label'     => 'Product EAN',
        'wordpress' => ''
    ),
    'nbm'                  => array(
        'skyhub'    => 'nbm',
        'label'     => 'Product NBM',
        'wordpress' => ''
    ),
    'categories'           => array(
        'skyhub'        => 'categories',
        'mapper'        => array(
            'db_to_entity' => \B2W\SkyHub\Model\Transformer\Category\DbToEntity::class,
            'entity_to_api'  => \B2W\SkyHub\Model\Transformer\Category\EntityToApi::class
        ),
        'show_in_admin' => false
    ),
    'images'               => array(
        'skyhub'        => 'images',
        'mapper'        => array(
            'db_to_entity' => \B2W\SkyHub\Model\Transformer\Product\Image\DbToEntity::class,
            'entity_to_api'  => \B2W\SkyHub\Model\Transformer\Product\Image\EntityToApi::class
        ),
        'show_in_admin' => false
    ),
    'specifications'       => array(
        'skyhub'        => 'specifications',
        'mapper'        => array(
            'db_to_entity' => \B2W\SkyHub\Model\Transformer\Product\Specification\DbToEntity::class,
            'entity_to_api'  => \B2W\SkyHub\Model\Transformer\Product\Specification\EntityToApi::class
        ),
        'show_in_admin' => false
    ),
    'variations'           => array(
        'skyhub'        => 'variations',
        'mapper'        => array(
            'db_to_entity' => \B2W\SkyHub\Model\Transformer\Product\Variation\Collection\DbToEntity::class,
            'entity_to_api'  => \B2W\SkyHub\Model\Transformer\Product\Variation\EntityToApi::class
        ),
        'show_in_admin' => false
    ),
    'variation_attributes' => array(
        'skyhub'        => 'variation_attributes',
        'mapper'        => array(
            'db_to_entity' => \B2W\SkyHub\Model\Transformer\Product\VariationAttributes\DbToEntity::class,
            'entity_to_api'  => \B2W\SkyHub\Model\Transformer\Product\VariationAttributes\EntityToApi::class
        ),
        'show_in_admin' => false
    )
);
