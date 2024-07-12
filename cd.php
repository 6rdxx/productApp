<?php 

class CD extends Product {
    private $size;

    public function __construct($SKU, $name, $price, $size){
        parent::__construct($SKU,$name, $price, 'CD' );
        $this->size= $size;

    }

    public function saveDetails(){
        $database = new Database();
        $db = $database->getConnection();

        $query = "INSERT INTO productdetails (product_id, size_mb) VALUES (:product_id, :size)";
        $stmt = $db->prepare($query);

        $stmt->bindParam(':product_id', $this->product_id);
        $stmt->bindParam(':size', $this->size);

        return $stmt->execute();

    }
}


?>