<?php

include "Controller/ProductContoller.php";

use Controller\ProductController;

$productController = new ProductController;

echo $productController->getAllProduct();