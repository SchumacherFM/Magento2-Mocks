<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

// @codingStandardsIgnoreFile

namespace Magento\Review\Helper;

/**
 * Default review helper
 *
 * @api
 * @since 100.0.2
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Data constructor.
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    )
    {
        parent::__construct($context);
    }

    /**
     * Return an indicator of whether or not guest is allowed to write
     *
     * @return bool
     * @SuppressWarnings(PHPMD.BooleanGetMethodName)
     */
    public function getIsGuestAllowToWrite()
    {
        return false;
    }

    /**
     * Get review statuses with their codes
     *
     * @return array
     */
    public function getReviewStatuses()
    {
        return [];
    }

    /**
     * Get review statuses as option array
     *
     * @return array
     */
    public function getReviewStatusesOptionArray()
    {
        return [];
    }
}
