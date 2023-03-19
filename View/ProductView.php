<?php

namespace View;

require_once __DIR__ . '/../Helper/InputHelper.php';

use Helper\InputHelper;
use Service\ProductService;

class ProdcutView
{
    private ProductService $productService;
    function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function mainMenu(): void
    {

        while (true) {
            $this->productService->showProducts();

            echo "Menu" . PHP_EOL;
            echo "1. Add Product" . PHP_EOL;
            echo "2. Remove Porduct" . PHP_EOL;
            echo "X. Exit" . PHP_EOL;

            $choose = InputHelper::input("Option");

            if ($choose == "x") {
                break;
            } else if ($choose == "1") {
                $this->addProduct();
            } else if ($choose == "2") {
                $this->removeProduct();
            }else{
                echo "Your input unrecognized". PHP_EOL;
            }
        }
        echo "See you soon" . PHP_EOL;
    }

    public function addProduct(): void
    {
        $input = InputHelper::input("Add Product");
        $this->productService->addProduct($input);
    }

    public function removeProduct(): void
    {
        $input = InputHelper::input("Remove ID (x cancel)");
        if($input == "x"){
            echo "Option canceled" . PHP_EOL;
        }else{
            $this->productService->removeProduct($input);
        }
    }
}
