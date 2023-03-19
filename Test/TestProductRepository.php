<?php

require_once __DIR__ . '/../Repository/ProductRepository.php';
require_once __DIR__ . '/../Entity/Product.php';

use Entity\Product;
use Repository\ProductRespositoryImpl;

function testFindAll(): void
{
    $productRepository = new ProductRespositoryImpl();
    $products = $productRepository->findAll();
    var_dump($products);
}

function testAdd(): void
{
    $productRepository = new ProductRespositoryImpl();
    $productRepository->add(new Product("Shampoo"));
    $productRepository->add(new Product("Soap"));
    $productRepository->add(new Product("Laptop"));

    $products = $productRepository->findAll();
    var_dump($products);
}

function testRemove(): void
{
    $productRepository = new ProductRespositoryImpl();
    $productRepository->add(new Product("Shampoo"));
    $productRepository->add(new Product("Soap"));
    $productRepository->add(new Product("Laptop"));

    $productRepository->remove(2);

    $products = $productRepository->findAll();
    var_dump($products);
}

// testFindAll();
// testAdd();
testRemove();