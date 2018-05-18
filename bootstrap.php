<?php
/// susiranda direktorija kur randasi projekto failai


define('ROOT_PATH', __DIR__);
require_once ROOT_PATH . '/vendor/autoload.php';


use Shop\Database;
use Config\Config;


$config = new Config();


$conn = new Database($config->getConfig('db'));
