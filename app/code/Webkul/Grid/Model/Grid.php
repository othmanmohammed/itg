<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Webkul\Grid\Model;
use Webkul\Grid\Api\Data\GridInterface;


/**
 * Description of Grid
 *
 * @author musman-intern
 */
class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
 /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'wk_grid_records';

    /**
     * @var string
     */
    protected $_cacheTag = 'wk_grid_records';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'wk_grid_records';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Webkul\Grid\Model\ResourceModel\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get Position.
     *
     * @return varchar
     */
    public function getPosition()
    {
        return $this->getData(self::POSITION);
    }

    /**
     * Set Position.
     */
    public function setPostion($position)
    {
        return $this->setData(self::POSITION, $position);
    }

    /**
     * Get getCode.
     *
     * @return varchar
     */
    public function getCode()
    {
        return $this->getData(self::CODE);
    }
    /**
     * Set Code.
     */
    public function setCode($code)
    {
        return $this->setData(self::CODE, $code);
    }
    /**
     * Get PublishDate.
     *
     * @return varchar
     */
    public function getPublishDate()
    {
        return $this->getData(self::PUBLISH_DATE);
    }

    /**
     * Set PublishDate.
     */
    public function setPublishDate($publishDate)
    {
        return $this->setData(self::PUBLISH_DATE, $publishDate);
    }

    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set IsActive.
     */
    public function setIsActive($isActive)
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    /**
     * Get UpdateTime.
     *
     * @return varchar
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Set UpdateTime.
     */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    public function setPosition($position) {
        
    }

}