# PHP SIMPLE CONTAINER
---
Container sederhana, sepenuhnya mendukung standarisasi PSR 11.

### Install
See in packagist
````
https://packagist.org/packages/fatkulnurk/container
````
with composer
```
composer require fatkulnurk/container
```

### Usage
**SET:**

Set a value to container, param number 1 is key and number 2 is value. Param number 1 only support int and string, param 2 support all data type, like a string, object, array, map, closure, function, etc.
```
<?php
// example
Container::getInstance()->set('example', 'something');

// example
Container::getInstance()->set('example', function () {
    return new Foo();
});

// example
Container::getInstance()->set('example', new Foo());
```
**GET:**

get value from container, if found will be return value and if not found will throw NotFoundException.
```
<?php
Container::getInstance()->has('example');
```
**HAS:**

check if value exist on container, if found will be return true and return false if not found.
```
<?php
Container::getInstance()->has('example');
```

**DELETE / DESTROY:**

Delete key and value from container
```
<?php
Container::getInstance()->delete('example');
// or
Container::getInstance()->destroy('example');
```

