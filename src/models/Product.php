<?php
namespace src\models;

class Product {
    public $id;
    public $patrimony;
    public $name;
    public $details;
    public $sector_id;
    public $resp_id;
}

interface ProductDao {
    public function addProduct(Product $u); //add produto
}