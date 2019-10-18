<?php

class OrderObserver implements \Magento\Framework\Event\ObserverInterface{

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */

    protected $resource;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource)
    {
        $this->resource = $resource;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        // TODO: Implement execute() method.


        $db = $this->resource->getConnection();
        $data = [
            [
                'post_title' => 'Data',
            ],
            [
                'post_title' => 'Hello'
            ]
        ];

        $db->insert('thedeveloper_orderverify',$data);
    }
}
