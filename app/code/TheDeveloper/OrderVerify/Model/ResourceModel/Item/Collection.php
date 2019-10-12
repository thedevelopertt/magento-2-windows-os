<?php

namespace TheDeveloper\OrderVerify\Model\ResourceModel\Item;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use TheDeveloper\OrderVerify\Model\Item;
use TheDeveloper\OrderVerify\Model\ResourceModel\Item as ItemResource;

class Collection extends AbstractCollection{
    protected function _construct()
    {
        $this->_init(
            Item::class,
            ItemResource::class
        );
    }
}
