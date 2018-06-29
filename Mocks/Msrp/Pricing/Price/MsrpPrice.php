<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Msrp\Pricing\Price;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Pricing\Price\FinalPrice;
use Magento\Framework\Pricing\Adjustment\CalculatorInterface;

/**
 * MSRP price model
 */
class MsrpPrice extends FinalPrice
{
    /**
     * Price type MSRP
     */
    const PRICE_CODE = 'msrp_price';

    /**
     * MsrpPrice constructor.
     * @param Product $saleableItem
     * @param float $quantity
     * @param CalculatorInterface $calculator
     * @param \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency
     */
    public function __construct(
        Product $saleableItem,
        $quantity,
        CalculatorInterface $calculator,
        \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency
    )
    {
        parent::__construct($saleableItem, $quantity, $calculator, $priceCurrency);
    }

    /**
     * Returns whether the MSRP should be shown on gesture
     *
     * @return bool
     */
    public function isShowPriceOnGesture()
    {
        return false;
    }

    /**
     * Get Msrp message for price
     *
     * @return string
     */
    public function getMsrpPriceMessage()
    {
        return '';
    }

    /**
     * Check if Minimum Advertised Price is enabled
     *
     * @return bool
     */
    public function isMsrpEnabled()
    {
        return false;
    }

    /**
     * Check if can apply Minimum Advertise price to product
     *
     * @param Product $product
     * @return bool
     */
    public function canApplyMsrp(Product $product)
    {
        return false;
    }

    /**
     * @param Product $product
     * @return bool|float
     */
    public function isMinimalPriceLessMsrp(Product $product)
    {
        return false;
    }
}
