# PHP Serializer
[![Build Status](https://travis-ci.org/isaactorresmichel/phpserializer.svg?branch=master)](https://travis-ci.org/isaactorresmichel/phpserializer)
[![GitHub issues](https://img.shields.io/github/issues/isaactorresmichel/phpserializer.svg)](https://github.com/isaactorresmichel/phpserializer/issues)
[![GitHub forks](https://img.shields.io/github/forks/isaactorresmichel/phpserializer.svg)](https://github.com/isaactorresmichel/phpserializer/network)
[![GitHub stars](https://img.shields.io/github/stars/isaactorresmichel/phpserializer.svg)](https://github.com/isaactorresmichel/phpserializer/stargazers)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/isaactorresmichel/phpserializer/master/LICENSE)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/isaactorresmichel/phpserializer.svg?style=social)](https://twitter.com/intent/tweet?text=Wow:&url=%5Bobject%20Object%5D)
[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?v=103)](https://github.com/ellerbrock/open-source-badges/)

PHP Serializer is a Factory to get a SerDes class optimized for your PHP installation.

```php
<?php

include 'vendor/autoload.php';

$sd_factory = new isaactorresmichel\phpserializer\SerializerFactory();

$data = $sd_factory->getSerializer()->serialize("Hello World!");

$success = false;
$data = $sd_factory->getSerializer()->unserialize($data, $success);

if($success){
    echo "Unserialize was successful: {$data}";
} else {
    echo "Failed!";
}
```

Credits on original idea to David Garcia on https://www.drupal.org/project/couchbasedrupal