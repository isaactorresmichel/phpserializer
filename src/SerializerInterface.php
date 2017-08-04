<?php

namespace isaactorresmichel\serdes;

interface SerializerInterface {

  function serialize($data);

  function unserialize($data, bool &$success);
}