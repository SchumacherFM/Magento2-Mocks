<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Multishipping\Model\Checkout\Type;

/**
 * Multishipping checkout model
 *
 * @api
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @codingStandardsIgnoreFile
 * @since 100.0.2
 */
class Multishipping extends \Magento\Framework\DataObject
{
    /**
     * Get quote items assigned to different quote addresses populated per item qty.
     * Based on result array we can display each item separately
     *
     * @return array
     */
    public function getQuoteShippingAddressesItems()
    {
        return [];
    }

    /**
     * Remove item from address
     *
     * @param int $addressId
     * @param int $itemId
     * @return \Magento\Multishipping\Model\Checkout\Type\Multishipping
     */
    public function removeAddressItem($addressId, $itemId)
    {
        return $this;
    }

    public function setShippingItemsInformation($info)
    {
        return $this;
    }

    public function updateQuoteCustomerShippingAddress($addressId)
    {
        return $this;
    }

    public function createOrders()
    {

    }

    /**
     * Collect quote totals and save quote object
     *
     * @return \Magento\Multishipping\Model\Checkout\Type\Multishipping
     */
    public function save()
    {

        return $this;
    }

    /**
     * Specify BEGIN state in checkout session whot allow reinit multishipping checkout
     *
     * @return \Magento\Multishipping\Model\Checkout\Type\Multishipping
     */
    public function reset()
    {
        return $this;
    }

    /**
     * Check if quote amount is allowed for multishipping checkout
     *
     * @return bool
     */
    public function validateMinimumAmount()
    {
        return false;
    }

    /**
     * Get notification message for case when multishipping checkout is not allowed
     *
     * @return string
     */
    public function getMinimumAmountDescription()
    {

        return '';
    }

    /**
     * @return string
     */
    public function getMinimumAmountError()
    {

        return '';
    }

    /**
     * Get order IDs created during checkout
     *
     * @param bool $asAssoc
     * @return array
     */
    public function getOrderIds($asAssoc = false)
    {
        return [];
    }

}
