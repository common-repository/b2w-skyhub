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

namespace B2W\SkyHub\Model\Transformer;

/**
 * Class TransformerAbstract
 * @package B2W\SkyHub\Model\Transformer
 */
abstract class TransformerAbstract
{
    /**
     * @var array
     */
    protected $_result          = array();
    /**
     * @var array
     */
    protected $_getterEntity    = array();
    /**
     * @var array
     */
    protected $_setterEntity    = array();

    /**
     * @return mixed
     */
    abstract protected function _getMapperKey();

    /**
     * @return mixed
     */
    abstract protected function _getAttributeMap();

    /**
     * @param $attr
     * @return mixed
     */
    abstract protected function _setResult($attr);

    /**
     * @return mixed
     */
    abstract protected function _prepareResult();

    /**
     * @param $entity
     * @return $this
     */
    public function setSetterEntity($entity)
    {
        $this->_setterEntity = $entity;
        return $this;
    }

    /**
     * @param $entity
     * @return $this
     */
    public function setGetterEntity($entity)
    {
        $this->_getterEntity = $entity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function convert()
    {
        foreach ($this->_getAttributeMap() as $attr) {

            $value = $this->_getValueAttributeValue($attr);

            if (isset($attr['mapper']) && isset($attr['mapper'][$this->_getMapperKey()])) {
                $mapper = new $attr['mapper'];
                $mapper->setData(
                    array(
                        'attribute' => $attr,
                        'data'      => $this->_data,
                        'parent'    => $this
                    )
                );
                $mapper->convert();
                continue;
            }

            $this->_setResult($attr);
        }

        return $this->_prepareResult();
    }

    protected function _getValueAttributeValue($attribute)
    {
    }
}
