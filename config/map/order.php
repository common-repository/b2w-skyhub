<?php

return array(
    'id'                       => array(
        'skyhub'    => 'id',
        'wordpress' => 'ID'
    ),
    'code'                     => array(
        'skyhub'    => 'code',
        'wordpress' => '_order_key'
    ),
    'channel'                  => array(
        'skyhub'    => 'channel',
        'wordpress' => '_skyhub_order_channel'
    ),
    'placed_at'                => array(
        'skyhub'    => 'placed_at',
        'wordpress' => 'post_date'
    ),
    'status_skyhub'            => array(
        'wordpress' => '_skyhub_order_status',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\Status::class
        )
    ),
    'updated_at'               => array(
        'skyhub'    => 'updated_at',
        'wordpress' => 'post_modified'
    ),
    'total_ordered'            => array(
        'skyhub'    => 'total_ordered',
        'wordpress' => '_order_total'
    ),
    'interest'                 => array(
        'skyhub'    => 'interest',
        'wordpress' => '_skyhub_order_interest'
    ),
    'shipping_cost'            => array(
        'skyhub'    => 'shipping_cost',
        'wordpress' => '_order_shipping',
    ),
    'shipping_method'          => array(
        'skyhub'    => 'shipping_method',
        'wordpress' => '_skyhub_order_shipping_method',
        'mapper'    => array(
            'db_to_entity' => B2W\SkyHub\Model\Transformer\Order\Shipping\DbToEntity::class
        ),
    ),
    'estimated_delivery'       => array(
        'skyhub'    => 'estimated_delivery',
        'wordpress' => '_skyhub_estimated_delivery'
    ),
    'customer'                 => array(
        'skyhub'    => 'customer',
        'wordpress' => '_customer_user',
        'mapper'    => array(
            'entity_to_db'  => \B2W\SkyHub\Model\Transformer\Customer\EntityToDb::class,
            'db_to_entity'  => \B2W\SkyHub\Model\Transformer\Customer\DbToEntity::class,
            'api_to_entity' => \B2W\SkyHub\Model\Transformer\Customer\ApiToEntity::class,
        )
    ),
    'shipping_address'         => array(
        'skyhub' => 'shipping_address',
        'mapper' => array(
            'entity_to_db'  => \B2W\SkyHub\Model\Transformer\Order\Address\EntityToDb::class,
            'db_to_entity'  => \B2W\SkyHub\Model\Transformer\Order\Address\DbToEntity::class,
            'api_to_entity' => \B2W\SkyHub\Model\Transformer\Order\Address\ApiToEntity::class,
        )
    ),
    'billing_address'          => array(
        'skyhub' => 'billing_address',
        'mapper' => array(
            'entity_to_db'  => \B2W\SkyHub\Model\Transformer\Order\Address\EntityToDb::class,
            'db_to_entity'  => \B2W\SkyHub\Model\Transformer\Order\Address\DbToEntity::class,
            'api_to_entity' => \B2W\SkyHub\Model\Transformer\Order\Address\ApiToEntity::class,
        )
    ),
    'invoices'                 => array(
        'skyhub' => 'invoices',
        'mapper' => array(
            'entity_to_db'  => \B2W\SkyHub\Model\Transformer\Order\Invoice\EntityToDb::class,
            'api_to_entity' => \B2W\SkyHub\Model\Transformer\Order\Invoice\ApiToEntity::class,
            'db_to_entity'  => \B2W\SkyHub\Model\Transformer\Order\Invoice\DbToEntity::class,
        )
    ),
    'shipments'                => array(
        'skyhub'    => 'shipments',
        'wordpress' => 'shipments',
        'mapper'    => Array(
            'entity_to_db'  => \B2W\SkyHub\Model\Transformer\Order\Shipment\EntityToDb::class,
            'db_to_entity'  => \B2W\SkyHub\Model\Transformer\Order\Shipment\DbToEntity::class,
            'api_to_entity' => \B2W\SkyHub\Model\Transformer\Order\Shipment\ApiToEntity::class
        )
    ),
    'sync_status'              => array(
        'skyhub'    => 'sync_status',
        'wordpress' => '_skyhub_sync_status'
    ),
    'status'                   => array(
        'skyhub'    => 'status',
        'wordpress' => 'post_status',
        'mapper'    => array(
            'entity_to_db'  => \B2W\SkyHub\Model\Transformer\Order\Status\EntityToDb::class,
            'db_to_entity'  => \B2W\SkyHub\Model\Transformer\Order\Status\DbToEntity::class,
            'api_to_entity' => \B2W\SkyHub\Model\Transformer\Order\Status\ApiToEntity::class,
        ),
    ),
    'calculation_type'         => array(
        'skyhub'    => 'calculation_type',
        'wordpress' => '_skyhub_calculation_type'
    ),
    'shipping_carrier'         => array(
        'skyhub'    => 'shipping_carrier',
        'wordpress' => '_skyhub_shipping_carrier'
    ),
    'tags'                     => array(
        'skyhub'    => 'tags',
        'wordpress' => '_skyhub_tags'
    ),
    'payments'                 => array(
        'skyhub'    => 'payments',
        'wordpress' => 'payments',
        'mapper' => array(
            'db_to_entity'  => \B2W\SkyHub\Model\Transformer\Order\Payment\DbToEntity::class,
            'entity_to_db'  => \B2W\SkyHub\Model\Transformer\Order\Payment\EntityToDb::class,
            'api_to_entity' => \B2W\SkyHub\Model\Transformer\Order\Payment\ApiToEntity::class
        )
    ),
    'estimated_delivery_shift' => array(
        'skyhub'    => 'estimated_delivery_shift',
        'wordpress' => '_skyhub_estimated_delivery_shift'
    ),
    /**
     *
     * CUSTOM FOR WOOCOMMERCE
     *
     */
    'post_title'               => array(
        'wordpress' => 'post_title',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\PostTitle::class
        )
    ),

    'comment_status'         => array(
        'wordpress' => 'comment_status',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\CommentStatus::class
        ),
    ),
    'ping_status'            => array(
        'wordpress' => 'ping_status',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\PingStatus::class
        ),
    ),
    'post_password'          => array(
        'wordpress' => 'post_password',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\PostPassword::class
        ),
    ),
    'post_type'              => array(
        'wordpress' => 'post_type',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\PostType::class
        ),
    ),
    'billing_address_index'  => array(
        'wordpress' => '_billing_address_index',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\AddressIndex::class
        )
    ),
    'shipping_address_index' => array(
        'wordpress' => '_shipping_address_index',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\AddressIndex::class
        )
    ),
    'billing_first_name'     => array(
        'wordpress' => '_billing_first_name',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\FirstName::class
        )
    ),
    'billing_last_name'      => array(
        'wordpress' => '_billing_last_name',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\LastName::class
        )
    ),
    'shipping_first_name'    => array(
        'wordpress' => '_shipping_first_name',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\FirstName::class
        )
    ),
    'shipping_last_name'     => array(
        'wordpress' => '_shipping_last_name',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\LastName::class
        )
    ),
    'billing_cpf'            => array(
        'wordpress' => '_billing_cpf',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\CpfCnpj::class
        )
    ),
    'billing_cnpj'           => array(
        'wordpress' => '_billing_cnpj',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\CpfCnpj::class
        )
    ),
    'billing_email'          => array(
        'wordpress' => '_billing_email',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\Email::class
        )
    ),
    'person_type'            => array(
        'wordpress' => '_person_type',
        'mapper'    => array(
            'entity_to_db' => \B2W\SkyHub\Model\Transformer\Order\Misc\PersonType::class
        )
    ),
    'items'                  => array(
        'skyhub' => 'items',
        'mapper' => array(
            'db_to_entity'  => \B2W\SkyHub\Model\Transformer\Order\Item\DbToEntity::class,
            'api_to_entity' => \B2W\SkyHub\Model\Transformer\Order\Item\ApiToEntity::class,
        )
    )
);
