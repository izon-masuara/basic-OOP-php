<?php

require_once __DIR__ . '/Repository/ProductRepository.php';
require_once __DIR__ . '/Service/ProductService.php';
require_once __DIR__ . '/View/ProductView.php';

use Repository\ProductRespositoryImpl;
use Service\ProductServiceImpl;
use View\ProdcutView;


$repository = new ProductRespositoryImpl();
$service = new ProductServiceImpl($repository);
$startApp = new ProdcutView($service);

$startApp->mainMenu();