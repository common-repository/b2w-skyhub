<?php

return array(
    'new'                => array(
        'skyhub'    => 'new',
        'wordpress' => 'wc-pending'
    ),
    'waiting_payment' => array(
        'skyhub'    => 'waiting_payment',
        'wordpress' => 'wc-pending'
    ),
    'approved'           => array(
        'skyhub'    => 'approved',
        'wordpress' => 'wc-processing'
    ),
    'delivered'          => array(
        'skyhub'    => 'delivered',
        'wordpress' => 'wc-completed'
    ),
    'shipment_exception' => array(
        'skyhub'    => 'shipment_exception',
        'wordpress' => 'wc-failed'
    ),
    'canceled'           => array(
        'skyhub'    => 'canceled',
        'wordpress' => 'wc-cancelled'
    ),
    'shipped'            => array(
        'skyhub'    => 'shipped',
        'wordpress' => 'wc-on-hold'
    ),
    'overdue'            => array(
        'skyhub'    => 'overdue',
        'wordpress' => ''
    )
);
