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

namespace B2W\SkyHub\Model\Transformer\Product\PromotionalPrice;

use B2W\SkyHub\Model\Transformer\DbToEntityAbstract;

/**
 * Class DbToEntity
 * @package B2W\SkyHub\Model\Transformer\Product\PromotionalPrice
 */
class DbToEntity extends DbToEntityAbstract
{
    /**
     * @return null
     */
    protected function _getEntityInstance()
    {
        return null;
    }

    /**
     * @return array|mixed
     */
    protected function _getAttributeMap()
    {
        return array();
    }

    /**
     * @return mixed|null
     */
    public function convert()
    {
        if (!isset($this->_meta['_sale_price'])) {
            return null;
        }

        if (!count($this->_meta['_sale_price'])) {
            return null;
        }

        if (isset($this->_meta['_sale_price_dates_from']) && current($this->_meta['_sale_price_dates_from']) > time()) {
            return null;
        }

        if (isset($this->_meta['_sale_price_dates_to']) && current($this->_meta['_sale_price_dates_to']) < time()) {
            return null;
        }

        return current($this->_meta['_sale_price']);
    }
}
