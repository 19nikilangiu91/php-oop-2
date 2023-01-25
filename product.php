<?php
// L'e-commerce vende "Prodotti" per animali.
// Definiamo una classe "Product".
class Product
{
    // Dichiaro delle "variabili d'istanza".
    private $name;
    private $brand;

    private $category;

    public $price;

    // all'interno della classe definiamo un "__construct".
    public function __construct($name, $brand, $category, $price)
    {
        $this->setName($name);
        $this->setBrand($brand);
        $this->setCategory($category);
        $this->setPrice($price);

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getHtml()
    {
        return
            "Name: " . $this->getName() . "<br>"
            . "Brand: " . $this->getBrand() . "<br>"
            . "Class: " . $this->getCategory() . "<br>"
            . "Price: " . $this->getPrice() . "<br>";
    }
}

// Food
$treatsCat = new Product("Treats for Cat", "Friskies", "Food", 20);
$treatsDog = new Product("Treats for Dog", "Whiskas", "Food", 10);

echo $treatsCat->getHtml();
echo "<br>";
echo $treatsDog->getHtml();

?>