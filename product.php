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

// Definiamo una classe "Food" e la estendiamo a "Product".
class Food extends Product
{
    private $quantity;

    public function __construct($name, $brand, $description, $category, $price, $quantity)
    {
        parent::__construct($name, $brand, $description, $category, $price);
        $this->setQuantity($quantity);
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

// Definiamo una classe "Toy" e la estendiamo a "Product".
class Toy extends Product
{
    public function __construct($name, $brand, $description, $category, $price)
    {
        parent::__construct($name, $brand, $description, $category, $price);

    }

    public function getHtml()
    {
        return parent::getHtml();
    }
}

// Definiamo una classe "Kennel" e la estendiamo a "Product".
class Kennel extends Product
{
    public function __construct($name, $brand, $description, $category, $price)
    {
        parent::__construct($name, $brand, $description, $category, $price);

    }

    public function getHtml()
    {
        return parent::getHtml();
    }
}

// Food Section
$foods = [
    new Food("Treats for Cat", "Friskies", "Good treats for your Cat", "Cat", 20 . "€", 150 . "gr"),
    new Food("Treats for Dog", "Whiskas", "Good treats for your Dog", "Dog", 10 . "€", 200 . "gr")
];

// Toy Section
$toys = [
    new Toy("Scratching Post", "Friskies", "Good Toy for your Cat", "Cat", 15 . "€"),
    new Toy("Plastic Bone", "Whiskas", "Good Toy for your Dog", "Dog", 25 . "€"),
];

// Kennel Section
$kennels = [
    new Kennel("Wood Cathouse", "Wood-Company", "Good Wood Kennel for your Cat", "Cat", 50 . "€"),
    new Kennel("Metal Doghouse", "Metal-Company", "Good Metal Kennel for your Dog", "Dog", 75 . "€"),
];

// Creo un ciclo "foreach" per stampare i contenuti nell'array "$foods"
foreach ($foods as $food) {
    echo $food->getHtml() . "<br>";
}

// Creo un ciclo "foreach" per stampare i contenuti nell'array "$toys"
foreach ($toys as $toy) {
    echo $toy->getHtml() . "<br>";
}

// Creo un ciclo "foreach" per stampare i contenuti nell'array "$kennels"
foreach ($kennels as $kennel) {
    echo $kennel->getHtml() . "<br>";
}

?>