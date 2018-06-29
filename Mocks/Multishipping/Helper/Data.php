<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

// @codingStandardsIgnoreFile

namespace Magento\Multishipping\Helper;

/**
 * Data helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $checkoutSession;

    /**
     * Construct
     *
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Checkout\Model\Session $checkoutSession
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Checkout\Model\Session $checkoutSession
    )
    {
        $this->checkoutSession = $checkoutSession;
        parent::__construct($context);
    }

    /**
     * Retrieve checkout quote
     *
     * @return \Magento\Quote\Model\Quote
     */
    public function getQuote()
    {
        return $this->checkoutSession->getQuote();
    }

    /**
     * Get maximum quantity allowed for shipping to multiple addresses
     *
     * @return int
     */
    public function getMaximumQty()
    {
        return 0;
    }

    /**
     * Check if multishipping checkout is available
     * There should be a valid quote in checkout session. If not, only the config value will be returned
     *
     * @return bool
     */
    public function isMultishippingCheckoutAvailable()
    {
        return false;
    }
}
