# randomPackage

## Installation

You can add this library as a local, per-project dependency to your project using [Composer](https://getcomposer.org/):

    composer require ulolop/randomPackage

If you only need this library during development, for instance to run your project's test suite, then you should add it as a development-time dependency:

    composer require --dev ulolop/randomPackage

## Usage

```php
<?php

require __DIR__ . '/../vendor/autoload.php';

$randomGenerator = new \Ulolop\RandomPackage\RandomGenerator();

$length = 8;
$hex = $randomGenerator->hex($length);
$string = $randomGenerator->string($length);
$password = $randomGenerator->password($length);

echo ($hex . "<br>" . $string . "<br>" . $password);

```
