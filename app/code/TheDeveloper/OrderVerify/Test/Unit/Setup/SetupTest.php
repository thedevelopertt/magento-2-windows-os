<?php

namespace TheDeveloper\OrderVerify\Test\Unit;

use Magento\Framework\App\DeploymentConfig;
use Magento\Framework\App\DeploymentConfig\Reader;
use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\Filesystem\DirectoryList;
use Magento\Framework\Module\ModuleList;
use Magento\TestFramework\ObjectManager;
use PHPUnit\Framework\TestCase;


class SetupTest extends TestCase{

    protected $objectManager;

    protected $_moduleName = 'TheDeveloper_OrderVerify';
    protected $moduleName;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->moduleName = $this->_moduleName;
    }

    protected function setUp()
    {
        $this->objectManager = ObjectManager::getInstance();
    }

    public function testModuleRegistered(){

        $registrar = new ComponentRegistrar();
        $paths = $registrar->getPaths(ComponentRegistrar::MODULE);
        $this->assertArrayHasKey('TheDeveloper_OrderVerify',$paths);
    }

    public function testTheModuleIsKnownAndEnabled(){

        $moduleList = $this->objectManager->create(ModuleList::class);

        $this->assertTrue(
            $moduleList->has($this->_moduleName),
            'The Module OrderVerify is not enabled'
        );
    }

    public function testTheModuleIsKnownAndEnabledInTheRealEnvironment()
    {
        $directoryList = $this->objectManager->create(DirectoryList::class,['root' => BP]);
        echo json_encode($directoryList);
//        $configReader = $this->objectManager->create(Reader::class, ['dirList' => $directoryList]);
//        $deploymentConfig = $this->objectManager->create(DeploymentConfig::class, ['reader' => $configReader]);

        /** @var ModuleList $moduleList */
//        $moduleList = $this->objectManager->create(ModuleList::class, ['config' => $deploymentConfig]);
//        $message = sprintf('The module "%s" is not enabled in the real environment', $this->moduleName);
//        $this->assertTrue($moduleList->has($this->moduleName), $message);
    }


}
