# PHP SerDes

PHP Serializer is a Factory to get a SerDes class optimized for your PHP installation.

```php
include 'vendor/autoload.php';

$sd_factory = new isaactorresmichel\serdes\SerializerFactory();

$hello = $sd_factory->getSerializer()->serialize("Hello World!");

$success = false;
echo $sd_factory->getSerializer()->unserialize($hello, $success);
```

Credits on original idea to David Garcia on https://www.drupal.org/project/couchbasedrupal