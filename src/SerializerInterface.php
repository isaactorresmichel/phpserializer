<?php

namespace isaactorresmichel\phpserializer;

interface SerializerInterface {

  function serialize($data);

  function unserialize($data, bool &$success);
}