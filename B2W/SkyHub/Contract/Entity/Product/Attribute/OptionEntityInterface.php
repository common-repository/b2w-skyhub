<?php
/**
 * BSeller - B2W Companhia Digital
 *
 * DISCLAIMER
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @copyright     Copyright (c) 2017 B2W Companhia Digital. (http://www.bseller.com.br/)
 * @author        Luiz Tucillo <luiz.tucillo@e-smart.com.br>
 */

namespace B2W\SkyHub\Contract\Entity\Product\Attribute;

/**
 * Class OptionEntityInterface
 * @package B2W\SkyHub\Contract\Entity\Product\Attribute
 */
interface OptionEntityInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @param $id
     * @return mixed
     */
    public function setId($id);

    /**
     * @return mixed
     */
    public function getCode();

    /**
     * @param $code
     * @return mixed
     */
    public function setCode($code);

    /**
     * @return mixed
     */
    public function getLabel();

    /**
     * @param $label
     * @return mixed
     */
    public function setLabel($label);
}
