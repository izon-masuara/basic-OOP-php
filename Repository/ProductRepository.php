<?php

namespace Repository;

use Entity\Product;

interface ProductRespository
{
    function findAll(): array;

    function add(Product $product): void;

    function remove(int $id): bool;
}

class ProductRespositoryImpl implements ProductRespository
{
    private array $products = array();
    public function findAll(): array
    {
        return $this->products;
    }

    public function add(Product $product) : void
    {
        $currentProductsSize = sizeof($this->products) + 1;
        $this->products[$currentProductsSize] = $product;
    }

    public function remove(int $id): bool
    {
        if($id > sizeof($this->products))
        {
            return false;
        }
        
        for ($i=$id; $i < sizeof($this->products) ; $i++) { 
            $this->products[$i] = $this->products[$i + 1];
        }

        unset($this->products[sizeof($this->products)]);

        return true;
    }
}