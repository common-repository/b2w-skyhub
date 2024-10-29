<?php
/**
 * BSeller - B2W Companhia Digital
 *
 * DISCLAIMER
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @copyright     Copyright (c) 2017 B2W Companhia Digital. (http://www.bseller.com.br/)
 * Access https://ajuda.skyhub.com.br/hc/pt-br/requests/new for questions and other requests.
 */

namespace B2W\SkyHub\Exception\Data;

use B2W\SkyHub\Exception\Exception;
use Throwable;

/**
 * Class MapNotFound
 * @package B2W\SkyHub\Exception\Data
 */
class ModelNotFound extends Exception
{
    /**
     * @var string
     */
    protected $message = 'Transformer %s not found';

    /**
     * TransformerNotFound constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct(sprintf($this->message, $message), $code, $previous);
    }
}
