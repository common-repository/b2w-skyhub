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

namespace B2W\SkyHub\Model\Transformer\Product\Image;

use B2W\SkyHub\Model\Entity\ProductEntity;
use B2W\SkyHub\Model\Transformer\DbToEntityAbstract;

/**
 * Class DbToEntity
 * @package B2W\SkyHub\Model\Transformer\Product\Image
 */
class DbToEntity extends DbToEntityAbstract
{
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
     * @return array|null
     */
    public function convert()
    {
        $ids    = array();
        $images = array();

        //
        if (isset($this->_meta[ProductEntity::META_IMAGE])) {
            $ids[] = current($this->_meta[ProductEntity::META_IMAGE]);
        }

        //IMAGE GALLERY
        $galleryIds = get_post_meta($this->_post->ID, ProductEntity::META_GALLERY, true);
        if ($galleryIds) {
            $ids = array_unique(array_merge($ids, explode(',', $galleryIds)));
        }

        foreach ($ids as $id) {
            $id         = trim($id);
            $imagePost  = get_post($id);

            if (!$imagePost) {
                continue;
            }

            if ($imagePost->guid) {
                $images[] = $imagePost->guid;
            }
        }

        return $images;
    }
}