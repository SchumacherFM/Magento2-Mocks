<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Bundle\Model\Product;

use Magento\Customer\Api\GroupManagementInterface;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Catalog\Api\Data\ProductTierPriceExtensionFactory;

/**
 * @api
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @since 100.0.2
 */
class Price extends \Magento\Catalog\Model\Product\Type\Price
{
    /**
     * Fixed bundle price type
     */
    const PRICE_TYPE_FIXED = 1;

    /**
     * Dynamic bundle price type
     */
    const PRICE_TYPE_DYNAMIC = 0;

    /**
     * Is min/max prices have been calculated by index
     *
     * @return bool
     * @SuppressWarnings(PHPMD.BooleanGetMethodName)
     */
    public function getIsPricesCalculatedByIndex()
    {
        return false;
    }

    /**
     * Return product base price
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return float
     */
    public function getPrice($product)
    {
            return 0;
    }

    /**
     * Get Total price  for Bundle items
     *
     * @param \Magento\Catalog\Model\Product $product
     * @param null|float $qty
     * @return float
     */
    public function getTotalBundleItemsPrice($product, $qty = null)
    {
        return 0;
    }

    /**
     * Retrieve array of bundle selection IDs
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return array
     */
    protected function getBundleSelectionIds(\Magento\Catalog\Model\Product $product)
    {
        return [];
    }

    /**
     * Get product final price
     *
     * @param   float                     $qty
     * @param   \Magento\Catalog\Model\Product $product
     * @return  float
     */
    public function getFinalPrice($qty, $product)
    {
        return 0;
    }

    /**
     * Returns final price of a child product
     *
     * @param \Magento\Catalog\Model\Product $product
     * @param float                      $productQty
     * @param \Magento\Catalog\Model\Product $childProduct
     * @param float                      $childProductQty
     * @return float
     */
    public function getChildFinalPrice($product, $productQty, $childProduct, $childProductQty)
    {
        return 0;
    }

    /**
     * Retrieve Price considering tier price
     *
     * @param  \Magento\Catalog\Model\Product $product
     * @param  string|null                $which
     * @param  bool|null                  $includeTax
     * @param  bool                       $takeTierPrice
     * @return float|array
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function getTotalPrices($product, $which = null, $includeTax = null, $takeTierPrice = true)
    {
        return 0;
    }

    /**
     * Get Options with attached Selections collection
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return \Magento\Bundle\Model\ResourceModel\Option\Collection
     */
    public function getOptions($product)
    {
        return null;
    }

    /**
     * Calculate price of selection
     *
     * @param \Magento\Catalog\Model\Product $bundleProduct
     * @param \Magento\Catalog\Model\Product $selectionProduct
     * @param float|null                 $selectionQty
     * @param null|bool                  $multiplyQty      Whether to multiply selection's price by its quantity
     * @return float
     *
     * @see \Magento\Bundle\Model\Product\Price::getSelectionFinalTotalPrice()
     */
    public function getSelectionPrice($bundleProduct, $selectionProduct, $selectionQty = null, $multiplyQty = true)
    {
        return 0;
    }

    /**
     * Calculate selection price for front view (with applied special of bundle)
     *
     * @param \Magento\Catalog\Model\Product $bundleProduct
     * @param \Magento\Catalog\Model\Product $selectionProduct
     * @param float                    $qty
     * @return float
     */
    public function getSelectionPreFinalPrice($bundleProduct, $selectionProduct, $qty = null)
    {
        return 0;
    }

    /**
     * Calculate final price of selection
     * with take into account tier price
     *
     * @param  \Magento\Catalog\Model\Product $bundleProduct
     * @param  \Magento\Catalog\Model\Product $selectionProduct
     * @param  float                    $bundleQty
     * @param  float                    $selectionQty
     * @param  bool                       $multiplyQty
     * @param  bool                       $takeTierPrice
     * @return float
     */
    public function getSelectionFinalTotalPrice(
        $bundleProduct,
        $selectionProduct,
        $bundleQty,
        $selectionQty,
        $multiplyQty = true,
        $takeTierPrice = true
    ) {
        return 0;
    }

    /**
     * Get product tier price by qty
     *
     * @param   float                    $qty
     * @param   \Magento\Catalog\Model\Product $product
     * @return  float|array
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function getTierPrice($qty, $product)
    {
        return 0;
    }

    /**
     * Calculate and apply special price
     *
     * @param float  $finalPrice
     * @param float  $specialPrice
     * @param string $specialPriceFrom
     * @param string $specialPriceTo
     * @param mixed  $store
     * @return float
     */
    public function calculateSpecialPrice(
        $finalPrice,
        $specialPrice,
        $specialPriceFrom,
        $specialPriceTo,
        $store = null
    ) {
        return 0;
    }

    /**
     * Returns the lowest price after applying any applicable bundle discounts
     *
     * @param /Magento/Catalog/Model/Product $bundleProduct
     * @param float|string $price
     * @param int          $bundleQty
     * @return float
     */
    public function getLowestPrice($bundleProduct, $price, $bundleQty = 1)
    {
        return 0;
    }
}
