<?php

namespace Entity;

class Product 
{
    private string $productName;

    function __construct(string $product = "")
    {
        $this->productName = $product;
    }

    public function getProduct() : string
    {
        return $this->productName;
    }
}