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

namespace B2W\SkyHub\Model\Transformer\Order\Misc;

use B2W\SkyHub\Model\Transformer\EntityToDbAbstract;
use B2W\SkyHub\Model\Entity\OrderEntity;

/**
 * Class Email
 * @package B2W\SkyHub\Model\Transformer\Order\Misc
 */
/** @method OrderEntity getEntity() */
class Email extends EntityToDbAbstract
{
    /**
     * @return mixed|null
     */
    protected function _getMapInstance()
    {
        return null;
    }

    /**
     * @return \B2W\SkyHub\Model\Transformer\Handler\Post|string
     */
    public function convert()
    {
        return $this->getEntity()->getCustomer()->getEmail();
    }
}
