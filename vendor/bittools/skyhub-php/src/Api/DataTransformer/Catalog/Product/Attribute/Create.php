<?php
/**
 * B2W Digital - Companhia Digital
 *
 * Do not edit this file if you want to update this SDK for future new versions.
 * For support please contact the e-mail bellow:
 *
 * sdk@e-smart.com.br
 *
 * @category  SkuHub
 * @package   SkuHub
 *
 * @copyright Copyright (c) 2018 B2W Digital - BSeller Platform. (http://www.bseller.com.br).
 *
 * @author    Tiago Sampaio <tiago.sampaio@e-smart.com.br>
 */

namespace SkyHub\Api\DataTransformer\Catalog\Product\Attribute;

use SkyHub\Api\DataTransformer\DataTransformerAbstract;

class Create extends DataTransformerAbstract
{
    
    /**
     * Attribute constructor.
     *
     * @param string $code
     * @param string $label
     * @param array  $options
     */
    public function __construct($code, $label, array $options = [])
    {
        $this->setOutputData([
            'attribute' => [
                'name' => $code,
                'label' => $label,
                'options' => $options
            ]
        ]);
        
        parent::__construct();
    }
}
