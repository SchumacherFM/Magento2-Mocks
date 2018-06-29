<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Bundle\Model\ResourceModel;

/**
 * Bundle Selection Resource Model
 *
 * @api
 * @since 100.0.2
 */
class Selection extends \Magento\Framework\DataObject
{

    /**
     * Retrieve Required children ids
     * Return grouped array, ex array(
     *   group => array(ids)
     * )
     *
     * @param int $parentId
     * @param bool $required
     * @return array
     */
    public function getChildrenIds($parentId, $required = true)
    {
        return [];
    }

    /**
     * Retrieve array of related bundle product ids by selection product id(s)
     *
     * @param int|array $childId
     * @return array
     */
    public function getParentIdsByChild($childId)
    {
        return [];
    }

    /**
     * Save bundle item price per website
     *
     * @param \Magento\Bundle\Model\Selection $item
     * @return void
     */
    public function saveSelectionPrice($item)
    {
    }

    /**
     * {@inheritdoc}
     * @since 100.2.0
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        return $this;
    }
}
