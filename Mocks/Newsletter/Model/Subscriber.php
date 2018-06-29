<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Newsletter\Model;

/**
 * Subscriber model
 *
 * @method int getStoreId()
 * @method $this setStoreId(int $value)
 * @method string getChangeStatusAt()
 * @method $this setChangeStatusAt(string $value)
 * @method int getCustomerId()
 * @method $this setCustomerId(int $value)
 * @method string getSubscriberEmail()
 * @method $this setSubscriberEmail(string $value)
 * @method int getSubscriberStatus()
 * @method $this setSubscriberStatus(int $value)
 * @method string getSubscriberConfirmCode()
 * @method $this setSubscriberConfirmCode(string $value)
 * @method int getSubscriberId()
 * @method Subscriber setSubscriberId(int $value)
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 *
 * @api
 * @since 100.0.2
 */
class Subscriber extends \Magento\Framework\Model\AbstractModel
{
    const STATUS_SUBSCRIBED = 1;
    const STATUS_NOT_ACTIVE = 2;
    const STATUS_UNSUBSCRIBED = 3;
    const STATUS_UNCONFIRMED = 4;


    /**
     * Subscriber constructor.
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource|null $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    )
    {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
    }

    /**
     * Return status change flag value
     *
     * @return boolean
     */
    public function isStatusChanged()
    {
        return false;
    }

    /**
     * Return customer subscription status
     *
     * @return bool
     */
    public function isSubscribed()
    {
        return false;
    }

    /**
     * Load subscriber data from resource model by email
     *
     * @param string $subscriberEmail
     * @return $this
     */
    public function loadByEmail($subscriberEmail)
    {
        return $this;
    }

    /**
     * Load subscriber info by customerId
     *
     * @param int $customerId
     * @return $this
     */
    public function loadByCustomerId($customerId)
    {
        return $this;
    }

    /**
     * Returns string of random chars
     *
     * @param int $length
     * @return string
     */
    public function randomSequence($length = 32)
    {
        return '';
    }

    /**
     * Subscribes by email
     *
     * @param string $email
     * @throws \Exception
     * @return int
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function subscribe($email)
    {
    }

    /**
     * Unsubscribes loaded subscription
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     * @return $this
     */
    public function unsubscribe()
    {
        return $this;
    }

    /**
     * Subscribe the customer with the id provided
     *
     * @param int $customerId
     * @return $this
     */
    public function subscribeCustomerById($customerId)
    {
        return $this;
    }

    /**
     * unsubscribe the customer with the id provided
     *
     * @param int $customerId
     * @return $this
     */
    public function unsubscribeCustomerById($customerId)
    {
        return $this;
    }

    /**
     * Update the subscription based on latest information of associated customer.
     *
     * @param int $customerId
     * @return $this
     */
    public function updateSubscription($customerId)
    {
        return $this;
    }

    /**
     * Confirms subscriber newsletter
     *
     * @param string $code
     * @return boolean
     */
    public function confirm($code)
    {
        return false;
    }

    /**
     * Mark receiving subscriber of queue newsletter
     *
     * @param  \Magento\Newsletter\Model\Queue $queue
     * @return boolean
     */
    public function received(\Magento\Newsletter\Model\Queue $queue)
    {
        return true;
    }

    /**
     * Sends out confirmation email
     *
     * @return $this
     */
    public function sendConfirmationRequestEmail()
    {
        return $this;
    }

    /**
     * Sends out confirmation success email
     *
     * @return $this
     */
    public function sendConfirmationSuccessEmail()
    {
        return $this;
    }

    /**
     * Sends out unsubscription email
     *
     * @return $this
     */
    public function sendUnsubscriptionEmail()
    {
        return $this;
    }

    /**
     * Retrieve Subscribers Full Name if it was set
     *
     * @return string|null
     */
    public function getSubscriberFullName()
    {
        return '';
    }
}
