<?php

namespace TheDeveloper\OrderVerify\Block;

use Magento\Framework\View\Element\Template;
use TheDeveloper\OrderVerify\Model\ResourceModel\Item\Collection;
use TheDeveloper\OrderVerify\Model\ResourceModel\Item\CollectionFactory;

class Index extends Template{

    private $collectionFactory;

    public function __construct(Template\Context $context, array $data = [], CollectionFactory $factory)
    {
        $this->collectionFactory = $factory;
        parent::__construct($context, $data);
    }

    /**
     * @return |TheDeveloper|OrderVerify|Model|OrderModel[]
     */
    public function getItems(){
        return $this->collectionFactory->create()->getItems();
    }
}
