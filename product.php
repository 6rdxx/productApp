<?php
abstract class Product {
    protected $SKU;
    protected $name;
    protected $price;
    protected $product_type;

    public function __construct($SKU, $name, $price, $product_type){
        $this->SKU = $SKU;  
        $this->name = $name;
        $this->price = $price;
        $this->product_type = $product_type;
    }

    public function save(){
        $database = new Database();
        $db = $database->getConnection();
    
        $query = "INSERT INTO  products  (SKU, name, price, product_type) VALUES (:SKU, :name, :price, :product_type)";
        $stmt = $db->prepare($query);
        
       $stmt->bindParam(':SKU', $this->SKU);
       $stmt->bindParam(':name', $this->name);
       $stmt->bindParam(':price', $this->price);
       $stmt->bindParam(':product_type', $this->product_type);

       if($stmt->execute()){
        $this->product_id = $db->lastInsertId();
        return true;
       }  else {
        return false;
       }

    }

    abstract public function saveDetails(); 
}
?>