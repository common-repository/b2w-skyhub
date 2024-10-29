<?php

return array(
    'value'            => array(
        'skyhub'    => 'value',
        'wordpress' => '_skyhub_payment_value'
    ),
    'transaction_date' => array(
        'skyhub'    => 'transaction_date',
        'wordpress' => '_skyhub_payment_transaction_date'
    ),
    'status'           => array(
        'skyhub'    => 'status',
        'wordpress' => '_skyhub_payment_status'
    ),
    'sefaz'            => array(
        'skyhub' => 'sefaz',
        'mapper' => array(
            'db_to_entity'  => \B2W\SkyHub\Model\Transformer\Order\Payment\Sefaz\DbToEntity::class,
            'api_to_entity' => \B2W\SkyHub\Model\Transformer\Order\Payment\Sefaz\ApiToEntity::class,
            'entity_to_db'  => \B2W\SkyHub\Model\Transformer\Order\Payment\Sefaz\EntityToDb::class,
        )
    ),
    'parcels'          => array(
        'skyhub'    => 'parcels',
        'wordpress' => '_skyhub_payment_parcels'
    ),
    'method'           => array(
        'skyhub'    => 'method',
        'wordpress' => '_skyhub_payment_method'
    ),
    'description'      => array(
        'skyhub'    => 'description',
        'wordpress' => '_skyhub_payment_description'
    ),
    'card_issuer'      => array(
        'skyhub'    => 'card_issuer',
        'wordpress' => '_skyhub_payment_card_issuer'
    ),
    'autorization_id'  => array(
        'skyhub'    => 'autorization_id',
        'wordpress' => '_skyhub_payment_autorization_id'
    )
);
