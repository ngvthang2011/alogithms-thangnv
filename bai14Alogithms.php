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

class  Category {
    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
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

$categories = [
    new Category(1,'Computer'),
    new Category(2,'Memory'),
    new Category(3,'Card'),
    new Category(4,'Acsesory'),
];

function mapProductByCategory ($listProduct, $listCategory) 
{
    foreach($listProduct as $product)
    {
        foreach($listCategory as $category)
        {
            if($product->categoryId === $category->id)
            {
                $product->catName = $category->name;
            }
        }
    }
    return $listProduct;
}

echo '<pre/>';
print_r(mapProductByCategory($products, $categories));