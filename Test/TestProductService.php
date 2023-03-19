<?php

require_once __DIR__ . '/../Repository/ProductRepository.php';
require_once __DIR__ . '/../Service/ProductService.php';
require_once __DIR__ . '/../Entity/Product.php';

use Entity\Product;
use Repository\ProductRespositoryImpl;
use Service\ProductServiceImpl;

function testShowProducts(): void
{
    $prodcutRepository = new ProductRespositoryImpl();
    $prodcutService = new ProductServiceImpl($prodcutRepository);

    $prodcutRepository->add(new Product("Shampoo"));
    $prodcutRepository->add(new Product("Soap"));
    $prodcutRepository->add(new Product("Laptop"));

    $prodcutService->showProducts();
}

function testAddProduct(): void 
{
    $productRepository = new ProductRespositoryImpl();
    $productService = new ProductServiceImpl($productRepository);

    $productService->addProduct("Shampo");
    $productService->addProduct("Lamp");
    $productService->addProduct("Laptop");

    $productService->showProducts();
}

function testRemoveProduct(): void
{
    $productRepository = new ProductRespositoryImpl();
    $productService = new ProductServiceImpl($productRepository);

    $productService->addProduct("Shampo");
    $productService->addProduct("Lamp");
    $productService->addProduct("Laptop");

    $productService->removeProduct(2);

    $productService->showProducts();
}

// testShowProducts();
// testAddProduct();
testRemoveProduct();