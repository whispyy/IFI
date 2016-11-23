<?php

//__DIR__ = current folder where this file is placed
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$result = Yaml::parse(file_get_contents('test.yml'));

dump($result);
