<?php 

class product {
    private $name;
    private $price;
    private $category;
    private $articleId;
    private $description;



function __construct($name_IN, $price_IN, $category_IN, $articleId_IN, $description_IN) {

    $this->name = $name_IN;
    $this->price = $price_IN;
    $this->category = $category_IN;
    $this->articleId = $articleId_IN;
    $this->description = $description_IN;

}  

    function get_Name() {
        return $this->name;

    }

    function get_Price() {
        return $this->price;
    }

    function get_TaxedPrice() {
        return (int)$this->price * 1.25 . "kr";
    }

    function get_Category() {
        return $this->category;
    }

    function get_ArticleId() {
        return $this->articleId;
    }
    
    function get_Description() {
        return $this->description;
    }

    function getAll() {
        return array($this->name, $this->price, $this->category, $this->articleId, $this->description);
    }



}

$snus = new product("XR slim white", "5$", "XRANGE", "1", "Xr's own slim white snus");


echo "<pre>";
print_r($snus->getAll());
echo "<pre>";

echo "Pris inklusive moms: " . $snus->get_TaxedPrice();
?>