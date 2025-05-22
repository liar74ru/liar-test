#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use function Test\StringUtils\capitalize;

echo 'Тестируем функцию capitalize' . PHP_EOL;

if (capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

echo "Все тесты пройдены!\n";