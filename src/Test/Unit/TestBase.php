<?php

namespace Timpack\FixDutchPostCodeRegex\Test\Unit;


use Magento\Framework\App\ObjectManager;
use PHPUnit_Framework_TestCase;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager as ObjectManagerHelper;

abstract class TestBase extends PHPUnit_Framework_TestCase
{
    /**
     * @var ObjectManagerHelper
     */
    protected $objectManagerHelper;

    /**
     * @var \Magento\Framework\App\ObjectManager
     */
    protected $objectManager;

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * Setup test
     */
    protected function setUp()
    {
        $bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
        $app = $bootstrap->createApplication('Magento\Framework\App\Http');
        $bootstrap->run($app);

        $this->objectManagerHelper = new ObjectManagerHelper($this);
        $this->objectManager = ObjectManager::getInstance();
        $this->scopeConfig = $this->objectManager->get('Magento\Framework\App\Config\ScopeConfigInterface');
    }
}