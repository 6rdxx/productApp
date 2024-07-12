<?php
class Furniture extends Product{
    private $dimensions;

    public function __construct($SKU, $name, $price, $weight){
        parent::__construct($SKU, $name, $price, 'Furniture');
        $this->dimensions = $height . 'x' .$width . 'x' . $length;
    }

    public function saveDetails(){
        $database = new Databsae();
        $db = $database->getConnection();


        $query = "INSERT INTO productdetails (product_id, dimensions_hxwxl) VALUES (:product_id, :dimensions)";
        $stmt = $db->prepare($query);

        $stmt->bindParam(':product_id', $this->product_id);
        $stmt->bindParam(':dimensions', $this->dimensions);

        return $stmt->execute();
    }
    
}