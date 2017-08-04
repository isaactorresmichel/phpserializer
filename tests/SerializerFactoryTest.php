<?php

namespace isaactorresmichel\phpserializer\tests;

use isaactorresmichel\phpserializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

class SerializerFactory extends TestCase
{
  const LITERAL = 'Hello World';

  public function test_serialize()
  {
    $factory = new \isaactorresmichel\phpserializer\SerializerFactory();
    $this->assertInstanceOf(SerializerInterface::class, $factory->getSerializer());

    $serializer = $factory->getSerializer();
    $this->assertInstanceOf(SerializerInterface::class, $serializer);

    $data = $serializer->serialize(static::LITERAL);
    $this->assertNotNull($data);

    $valid = FALSE;
    $data = $serializer->unserialize($data, $valid);

    $this->assertEquals(static::LITERAL, $data);
    $this->assertTrue($valid);
  }
}
