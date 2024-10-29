<?php

return array(
    'id'                 => array(
        'skyhub'        => 'id',
        'wordpress'     => 'ID',
        'show_in_admin' => false
    ),
    'name'               => array(
        'skyhub'        => 'name',
        'label'         => 'Customer Name',
        'description'   => 'Customer name',
        'type'          => 'string',
        'validation'    => null,
        'required'      => 1,
        'show_in_admin' => false,
        'mapper'        => array(
            'db_to_entity' => \B2W\SkyHub\Model\Transformer\Customer\Misc\NameDbToEntity::class
        )
    ),
    'email'              => array(
        'skyhub'      => 'email',
        'label'       => 'Customer e-mail',
        'description' => 'Customer e-mail',
        'type'        => 'string',
        'validation'  => null,
        'required'    => 1,
        'wordpress'   => '_billing_email'
    ),
    'date_of_birth'      => array(
        'skyhub'      => 'date_of_birth',
        'label'       => 'Customer Date of Birth',
        'description' => 'Customer Date of Birth',
        'type'        => 'string',
        'validation'  => null,
        'required'    => 0,
        'wordpress'   => '_billing_birthdate'
    ),
    'gender'             => array(
        'skyhub'      => 'gender',
        'label'       => 'Customer Gender',
        'description' => 'Customer Gender',
        'type'        => 'string',
        'validation'  => null,
        'required'    => 0,
        'wordpress'   => '_billing_sex'
    ),
    'cpf'                => array(
        'skyhub'      => 'vat_number',
        'label'       => 'Customer CPF',
        'description' => 'Customer CPF',
        'type'        => 'string',
        'validation'  => null,
        'required'    => 0,
        'wordpress'   => '_billing_cpf'
    ),
    'cnpj'               => array(
        'skyhub'      => 'vat_number',
        'label'       => 'Customer CNPJ',
        'description' => 'Customer CNPJ',
        'type'        => 'string',
        'validation'  => null,
        'required'    => 0,
        'wordpress'   => '_billing_cnpj'
    ),
    'phones'             => array(
        'skyhub'      => 'phones',
        'label'       => 'Customer Phone List',
        'description' => 'Customer Phone List',
        'type'        => 'array',
        'validation'  => null,
        'required'    => 0,
        'wordpress'   => '_billing_phone'
    ),
    'state_registration' => array(
        'skyhub'      => 'state_registration',
        'label'       => 'Customer State Registration',
        'description' => 'Customer State Registration',
        'type'        => 'array',
        'validation'  => null,
        'required'    => 0,
        'wordpress'   => '_billing_ie'
    ),
);
