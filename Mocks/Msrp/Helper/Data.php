<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Msrp\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

/**
 * Msrp data helper
 */
class Data extends AbstractHelper
{
    /**
     * Check if can apply Minimum Advertise price to product
     * in specific visibility
     *
     * @param int|Product $product
     * @param int|null $visibility Check displaying price in concrete place (by default generally)
     * @return bool
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function canApplyMsrp($product, $visibility = null)
    {
        return false;
    }

    /**
     * Get Msrp message for price
     *
     * @param Product $product
     * @return string
     */
    public function getMsrpPriceMessage($product)
    {
        return '';
    }

    /**
     * Check is product need gesture to show price
     *
     * @param int|Product $product
     * @return bool
     */
    public function isShowPriceOnGesture($product)
    {
        return false;
    }

    /**
     * @param int|Product $product
     * @return bool
     */
    public function isShowBeforeOrderConfirm($product)
    {
        return false;
    }

    /**
     * @param int|Product $product
     * @return bool|float
     */
    public function isMinimalPriceLessMsrp($product)
    {
        return false;
    }
}
