<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Newsletter\Model\ResourceModel\Queue;

/**
 * Newsletter queue collection.
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 *
 * @api
 * @since 100.0.2
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{


    /**
     * Collection constructor.
     * @param \Magento\Framework\Data\Collection\EntityFactory $entityFactory
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy
     * @param \Magento\Framework\Event\ManagerInterface $eventManager
     * @param \Magento\Framework\DB\Adapter\AdapterInterface|null $connection
     * @param \Magento\Framework\Model\ResourceModel\Db\AbstractDb|null $resource
     */
    public function __construct(
        \Magento\Framework\Data\Collection\EntityFactory $entityFactory,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        \Magento\Framework\DB\Adapter\AdapterInterface $connection = null,
        \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null
    )
    {
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
    }

    /**
     * Initializes collection
     *
     * @return void
     */
    protected function _construct()
    {
    }

    /**
     * Joines templates information
     *
     * @return $this
     */
    public function addTemplateInfo()
    {
        return $this;
    }

    /**
     * Adds subscribers info to selelect
     *
     * @return $this
     */
    protected function _addSubscriberInfoToSelect()
    {
        return $this;
    }

    /**
     * Adds subscribers info to select and loads collection
     *
     * @param bool $printQuery
     * @param bool $logQuery
     * @return $this
     */
    public function load($printQuery = false, $logQuery = false)
    {
        return $this;
    }

    /**
     * Joines subscribers information
     *
     * @return $this
     */
    public function addSubscribersInfo()
    {
        return $this;
    }

    /**
     * Checks if field is 'subscribers_total', 'subscribers_sent'
     * to add specific filter or adds reguler filter
     *
     * @param string $field
     * @param null|string|array $condition
     * @return $this
     */
    public function addFieldToFilter($field, $condition = null)
    {
        return $this;
    }

    /**
     * Set filter for queue by subscriber.
     *
     * @param int $subscriberId
     * @return $this
     */
    public function addSubscriberFilter($subscriberId)
    {
        return $this;
    }

    /**
     * Add filter by only ready fot sending item
     *
     * @return $this
     */
    public function addOnlyForSendingFilter()
    {
        return $this;
    }

    /**
     * Add filter by only not sent items
     *
     * @return $this
     */
    public function addOnlyUnsentFilter()
    {
        return $this;
    }

    /**
     * Returns options array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [];
    }

    /**
     * Filter collection by specified store ids
     *
     * @param int[]|int $storeIds
     * @return $this
     */
    public function addStoreFilter($storeIds)
    {
        return $this;
    }
}
