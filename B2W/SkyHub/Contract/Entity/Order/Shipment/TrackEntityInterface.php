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

namespace B2W\SkyHub\Contract\Entity\Order\Shipment;

/**
 * Interface TrackEntityInterface
 * @package B2W\SkyHub\Contract\Entity\Order\Shipment
 */
interface TrackEntityInterface
{
    /**
     * @return string
     */
    public function getCode();

    /**
     * @param $code
     * @return string
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getCarrier();

    /**
     * @param $carrier
     * @return string
     */
    public function setCarrier($carrier);

    /**
     * @return string
     */
    public function getMethod();

    /**
     * @param $method
     * @return string
     */
    public function setMethod($method);
}
