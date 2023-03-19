<?php

namespace Service;

require_once __DIR__ . '/../Entity/Product.php';

use Entity\Product;
use Repository\ProductRespository;

interface ProductService 
{
    function showProducts(): void;

    function addProduct(string $productName): void;

    function removeProduct(int $id): void;
}

class ProductServiceImpl implements ProductService
{
    private ProductRespository $productRepository;

    function __construct(ProductRespository $productRespository)
    {
        $this->productRepository = $productRespository;
    }
    public function showProducts():void
    {
        echo "Kind Of Products" . PHP_EOL;
        $products = $this->productRepository->findAll();
        foreach ($products as $key => $value) {
            echo "$key." . $value->getProduct() . PHP_EOL;
        }
    }

    public function addProduct(string $productName): void
    {
        $payload = new Product($productName);
        $this->productRepository->add($payload);
    }

    public function removeProduct(int $id): void
    {
        $this->productRepository->remove($id);
    }
}