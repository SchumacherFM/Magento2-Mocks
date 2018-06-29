<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Review\Model\ResourceModel\Review;

/**
 * Review collection resource model
 *
 * @api
 * @since 100.0.2
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @param \Magento\Framework\Data\Collection\EntityFactory $entityFactory
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy
     * @param \Magento\Framework\Event\ManagerInterface $eventManager
     * @param \Magento\Review\Helper\Data $reviewData
     * @param \Magento\Review\Model\Rating\Option\VoteFactory $voteFactory
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param mixed $connection
     * @param \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource
     */
    public function __construct(
        \Magento\Framework\Data\Collection\EntityFactory $entityFactory,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        \Magento\Review\Helper\Data $reviewData,
        \Magento\Review\Model\Rating\Option\VoteFactory $voteFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\DB\Adapter\AdapterInterface $connection = null,
        \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null
    ) {
        // CSC: Constructor arguments above cannot be changed because this class gets used
        // as a parent class in Magento\Reports\Model\ResourceModel\Review\Customer\Collection
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
    }

    /**
     * Add customer filter
     *
     * @param int|string $customerId
     * @return $this
     */
    public function addCustomerFilter($customerId)
    {
        return $this;
    }

    /**
     * Add store filter
     *
     * @param int|int[] $storeId
     * @return $this
     */
    public function addStoreFilter($storeId)
    {
        return $this;
    }

    /**
     * Add stores data
     *
     * @return $this
     */
    public function addStoreData()
    {
        return $this;
    }

    /**
     * Add entity filter
     *
     * @param int|string $entity
     * @param int $pkValue
     * @return $this
     */
    public function addEntityFilter($entity, $pkValue)
    {
        return $this;
    }

    /**
     * Add status filter
     *
     * @param int|string $status
     * @return $this
     */
    public function addStatusFilter($status)
    {
        return $this;
    }

    /**
     * Set date order
     *
     * @param string $dir
     * @return $this
     */
    public function setDateOrder($dir = 'DESC')
    {
        return $this;
    }

    /**
     * Add rate votes
     *
     * @return $this
     */
    public function addRateVotes()
    {
        return $this;
    }

    /**
     * Add reviews total count
     *
     * @return $this
     */
    public function addReviewsTotalCount()
    {
        return $this;
    }

    /**
     * Load data
     *
     * @param boolean $printQuery
     * @param boolean $logQuery
     * @return $this
     */
    public function load($printQuery = false, $logQuery = false)
    {
        return $this;
    }
}
