<?php

return array(
    'tracks' => Array(
        'skyhub'    => 'tracks',
        'mapper' => Array(
            'api_to_entity' => \B2W\SkyHub\Model\Transformer\Order\Shipment\Track\ApiToEntity::class,
            'db_to_entity'  => \B2W\SkyHub\Model\Transformer\Order\Shipment\Track\DbToEntity::class,
            'entity_to_db'  => \B2W\SkyHub\Model\Transformer\Order\Shipment\Track\EntityToDb::class
        )
    ),
);
