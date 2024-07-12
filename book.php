<?php
class Book extends Product{
    private $weight;

    public function __construct($SKU, $name, $price, $weight){
        parent::__construct($SKU, $name, $price, 'Book');
        $this->weight = $weight;
    }

    public function saveDetails(){
        $database = new Databsae();
        $db = $database->getConnection();


        $query = "INSERT INTO productdetails (product_id, weight_kg) VALUES (:product_id, :weight)";
        $stmt = $db->prepare($query);

        $stmt->bindParam(':product_id', $this->product_id);
        $stmt->bindParam(':weight', $this->weight);

        return $stmt->execute();
    }
    
}
?>