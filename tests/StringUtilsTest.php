#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use function Test\StringUtils\capitalize;
use Webmozart\Assert\Assert;

echo 'Тестируем функцию capitalize' . PHP_EOL;

Assert::eq(capitalize(''), '');
echo "Тест 1 пройден!\n";
Assert::eq(capitalize('hello'), 'Hello');
echo "Тест 2 пройден!\n";

echo "Все тесты пройдены!\n";