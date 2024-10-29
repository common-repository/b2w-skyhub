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

namespace B2W\SkyHub\Model\Transformer\Product\Specification;

use B2W\SkyHub\Contract\Entity\Product\SpecificationEntityInterface;
use B2W\SkyHub\Model\Resource\Collection;

class EntityToApi
{
    public function convert(Collection $collection, $parentTranformer)
    {
        /** @var \SkyHub\Api\EntityInterface\Catalog\Product $productInterface */
        $productInterface   = $parentTranformer->getInterface();

        /** @var SpecificationEntityInterface $specification */
        foreach ($collection as $specification) {
            $productInterface->addSpecification(
                $specification->getAttribute(),
                $specification->getValue()
            );
        }

        return null;
    }
}
