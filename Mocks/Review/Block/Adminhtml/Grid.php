<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

// @codingStandardsIgnoreFile

/**
 * Adminhtml reviews grid
 *
 * @method int getProductId() getProductId()
 * @method \Magento\Review\Block\Adminhtml\Grid setProductId() setProductId(int $productId)
 * @method int getCustomerId() getCustomerId()
 * @method \Magento\Review\Block\Adminhtml\Grid setCustomerId() setCustomerId(int $customerId)
 * @method \Magento\Review\Block\Adminhtml\Grid setMassactionIdFieldOnlyIndexValue() setMassactionIdFieldOnlyIndexValue(bool $onlyIndex)
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */

namespace Magento\Review\Block\Adminhtml;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * Grid constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        array $data = []
    )
    {
        parent::__construct($context, $backendHelper, $data);
    }
}
