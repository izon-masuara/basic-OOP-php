<?php

require_once __DIR__ . '/../Entity/Product.php';
require_once __DIR__ . '/../Repository/ProductRepository.php';
require_once __DIR__ . '/../Service/ProductService.php';
require_once __DIR__ . '/../View/ProductView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';

use Repository\ProductRespositoryImpl;
use Service\ProductServiceImpl;
use View\ProdcutView;

function testMainMenu(): void
{
    $productRepository = new ProductRespositoryImpl();
    $productService = new ProductServiceImpl($productRepository);
    $productView = new ProdcutView($productService);

    $productService->addProduct("Shampo");

    $productView->mainMenu();
}

function testAddProduct(): void
{
    $productRepository = new ProductRespositoryImpl();
    $productService = new ProductServiceImpl($productRepository);
    $productView = new ProdcutView($productService);

    $productService->addProduct("Shampo");
    $productView->addProduct();
    $productService->showProducts();

}

function testRemoveProdcut(): void
{
    $productRepository = new ProductRespositoryImpl();
    $productService = new ProductServiceImpl($productRepository);
    $productView = new ProdcutView($productService);

    $productService->addProduct("Shampo");
    $productService->addProduct("Laptop");
    $productService->addProduct("Soap");
    $productView->removeProduct();
    $productService->showProducts();
}

//testMainMenu();
// testAddProduct();
testRemoveProdcut();