<?php

namespace TheDeveloper\OrderVerify\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel{
    protected function _construct()
    {
        $this->_init(\TheDeveloper\OrderVerify\Model\ResourceModel\Item::class);
    }

}
