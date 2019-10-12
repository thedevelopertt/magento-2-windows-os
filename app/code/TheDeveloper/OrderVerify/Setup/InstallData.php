<?php

namespace TheDeveloper\OrderVerify\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface{

    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $install = $setup;
        $install->startSetup();

        $_connection = $install->getConnection();
        $connection = $_connection;

        $data = [
            [
              'post_title' => 'Products One',
            ],
            [
              'post_title' => 'Hello'
            ]
        ];

        foreach ($data as $bind){
            $connection->insertForce(
                $install->getTable('thedeveloper_orderverify'),
                $bind
            );
        }

        $install->endSetup();
    }
}
