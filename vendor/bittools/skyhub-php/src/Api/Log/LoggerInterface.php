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

namespace SkyHub\Api\Log;

use SkyHub\Api\Log\TypeInterface\TypeRequestInterface;
use SkyHub\Api\Log\TypeInterface\TypeResponseInterface;

interface LoggerInterface
{
    
    /**
     * @param TypeRequestInterface $request
     *
     * @return mixed
     */
    public function logRequest(TypeRequestInterface $request);
    
    
    /**
     * @param TypeResponseInterface $response
     *
     * @return mixed
     */
    public function logResponse(TypeResponseInterface $response);
}
