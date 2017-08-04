# PHP Serializer

PHP Serializer is a Factory to get a SerDes class optimized for your PHP installation.

```php
<?php

include 'vendor/autoload.php';

$sd_factory = new isaactorresmichel\serdes\SerializerFactory();

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