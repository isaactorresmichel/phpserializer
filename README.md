# PHP Serializer
[![Build Status](https://travis-ci.org/isaactorresmichel/phpserializer.svg?branch=master)](https://travis-ci.org/isaactorresmichel/phpserializer)
[![Latest Stable Version](https://poser.pugx.org/isaactorresmichel/phpserializer/version)](https://packagist.org/packages/isaactorresmichel/phpserializer)
[![Total Downloads](https://poser.pugx.org/isaactorresmichel/phpserializer/downloads)](https://packagist.org/packages/isaactorresmichel/phpserializer)
[![Latest Unstable Version](https://poser.pugx.org/isaactorresmichel/phpserializer/v/unstable)](//packagist.org/packages/isaactorresmichel/phpserializer)
[![License](https://poser.pugx.org/isaactorresmichel/phpserializer/license)](https://packagist.org/packages/isaactorresmichel/phpserializer)
[![composer.lock available](https://poser.pugx.org/isaactorresmichel/phpserializer/composerlock)](https://packagist.org/packages/isaactorresmichel/phpserializer)
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