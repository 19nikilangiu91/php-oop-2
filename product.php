<?php
// L'e-commerce vende "Prodotti" per animali.
// Definiamo una classe "Product".
class Product
{
    // Dichiaro delle "variabili d'istanza".
    private $name;
    private $brand;

    private $description;

    private $category;

    private $price;

    // all'interno della classe definiamo un "__construct".
    public function __construct($name, $brand, $description, $category, $price)
    {
        $this->setName($name);
        $this->setBrand($brand);
        $this->setDescription($description);
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

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
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
            . "Description: " . $this->getDescription() . "<br>"
            . "Category: " . $this->getCategory() . "<br>"
            . "Price: " . $this->getPrice() . "<br>";
    }
}

class Food extends Product
{
    private $quantity;

    public function __construct($name, $brand, $description, $category, $price, $quantity)
    {
        $this->setQuantity($quantity);
        parent::__construct($name, $brand, $description, $category, $price);
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantityHtml()
    {
        return "Quantity: " . $this->getQuantity() . "<br>";
    }

    public function getHtml()
    {
        return parent::getHtml() . $this->getQuantityHtml();
    }

}


// Food Section
$foodCat = new Food("Treats for Cat", "Friskies", "Good treats for your Cat", "Food", 20, 150 . "gr");
$foodDog = new Food("Treats for Dog", "Whiskas", "Good treats for your Dog", "Food", 10, 200 . "gr");

echo $foodCat->getHtml();
echo "<br>";
echo $foodDog->getHtml();

?>