<?php
class Product {
    public $name;
    public $price;
    public $quality;
    public $categoryId;

    public function __construct($name, $price, $quality, $categoryId){
        $this->name = $name;
        $this->price = $price;
        $this->quality = $quality;
        $this->categoryId = $categoryId;
    }
}


$products = [
    new Product('CPU', 750, 10, 1),
    new Product('RAM', 50, 2, 2),
    new Product('HDD', 70, 1, 2),
    new Product('Main', 400, 3, 1),
    new Product('Keyboard', 30, 8, 4),
    new Product('Mouse', 25, 50, 4),
    new Product('VGA', 60, 35, 3),
    new Product('Monitor', 120, 28, 2),
    new Product('Case', 120, 28, 5),

];

function findProductByPrice($listProduct, $price)
{

    $productByPrice = array();

   foreach($listProduct as $product)
   {
        if($product->price <= $price)
        {
            $productByPrice[] = $product;
        }
   }
   return $productByPrice;
}

$productByPrice = findProductByPrice($products, 60);

echo '<pre/>';
print_r($productByPrice);