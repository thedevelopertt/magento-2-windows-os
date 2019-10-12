<?php

namespace TheDeveloper\OrderVerify\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb{

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('thedeveloper_orderverify','post_id');
    }
}
