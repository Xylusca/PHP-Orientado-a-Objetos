<?php
require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slugify = new Slugify();
$slugify->addRule('Hello', 'Ola');
echo $slugify->Slugify('Hello World!', '_'); // hello-world
