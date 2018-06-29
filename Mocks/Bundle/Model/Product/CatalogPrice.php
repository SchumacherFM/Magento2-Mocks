<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Bundle\Model\Product;

/**
 * Price model for external catalogs
 */
class CatalogPrice implements \Magento\Catalog\Model\Product\CatalogPriceInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCatalogPrice(
        \Magento\Catalog\Model\Product $product,
        \Magento\Store\Api\Data\StoreInterface $store = null,
        $inclTax = false
    )
    {
        return 0;
    }

    /**
     * Regular catalog price not applicable for bundle product
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return null
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function getCatalogRegularPrice(\Magento\Catalog\Model\Product $product)
    {
        return null;
    }
}
