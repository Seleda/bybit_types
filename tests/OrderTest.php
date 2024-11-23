<?php


use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function test_instanceCreate()
    {
        $response = json_decode(file_get_contents(dirname(__FILE__).'/files/1728468011737_order.json'), true);
        $object = new \Seleda\BybitTypes\Сomposite\Order($response['data'][0]);
        $this->assertInstanceOf('\\Seleda\\BybitTypes\\Simple\\Category', $object->category);
        $this->assertEquals('linear', $object->category);
        $this->assertTrue('1' === (string)$object->positionIdx);
        $this->assertEquals('false', (string)$object->closeOnTrigger);
    }
}
