<?php

namespace isaactorresmichel\phpserializer;

/**
 * Serializer that properly deals with
 * failed unserialization
 */
class SerializerFactory {

  /**
   * The serializer
   *
   * @var SerializerInterface
   */
  protected $serializer;

  /**
   * Get an instance of SerializerFactory.
   */
  public function __construct() {
    if(function_exists('igbinary_serialize')) {
      $this->serializer = new IgbinarySerializer();
    }
    else {
      $this->serializer = new PhpSerializer();
    }
  }

  /**
   * Grab the most performant available serializer.
   *
   * @return SerializerInterface
   */
  public function getSerializer() {
    return $this->serializer;
  }

}