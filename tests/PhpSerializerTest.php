<?php

namespace isaactorresmichel\phpserializer\tests;

use isaactorresmichel\phpserializer\PhpSerializer;
use isaactorresmichel\phpserializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

class PhpSerializerTest extends TestCase
{
  const LITERAL = 'Hello World';

  public function test_serialize()
  {
    $serializer = new PhpSerializer();
    $this->assertInstanceOf(SerializerInterface::class, $serializer);

    $data = $serializer->serialize(static::LITERAL);
    $this->assertNotNull($data);

    $valid = FALSE;
    $data = $serializer->unserialize($data, $valid);

    $this->assertEquals(static::LITERAL, $data);
    $this->assertTrue($valid);
  }
}
