<?php
namespace src\dao;
require_once 'src/models/Product.php';

use src\models\Product;
use src\models\ProductDao;
use PDO;

class ProductDaoMysql implements ProductDao {
    public $pdo;

    public function __construct(PDO $driver) {
        $this->pdo = $driver;
    }

    public function addProduct(Product $u) {
        //code
    }
}