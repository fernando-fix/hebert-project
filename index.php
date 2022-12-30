<?php
require_once 'vendor/autoload.php';

use src\config\Config;
use src\dao\ProductDaoMysql;

$config = new Config;
$newProduct = new ProductDaoMysql($config->connection);

