<?php

namespace Timpack\FixDutchPostCodeRegex\Test\Unit\Model\Plugin;


use Timpack\FixDutchPostCodeRegex\Test\Unit\TestBase;

class PostcodeTest extends TestBase
{
    /**
     * @var \Magento\Directory\Model\Country\Postcode\ConfigInterface
     */
    protected $target;

    protected function setUp()
    {
        parent::setUp();

        $this->target = $this->objectManager->get('\Magento\Directory\Model\Country\Postcode\ConfigInterface');
    }

    public function testGetPostCodes()
    {
        $expected = [
            'example' => '1234 AB',
            'pattern' => '^[0-9]{4}\s?[a-zA-Z]{2}$'
        ];
        $postCodes = $this->target->getPostCodes();
        $this->assertEquals($expected, $postCodes['NL']['pattern_1']);
    }

    public function testPattern()
    {
        $postCodes = $this->target->getPostCodes();
        $pattern = $postCodes['NL']['pattern_1']['pattern'];
        $pattern = "/$pattern/";
        $this->assertRegExp($pattern, '1234 AB');
        $this->assertRegExp($pattern, '1234AB');
    }
}