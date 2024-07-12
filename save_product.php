<?php
include 'DatabaseConnection.php';
include 'Product.php';
include 'CD.php';
include 'Book.php';
include 'Chair.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];

    switch ($type) {
        case 'cd':
            $size = $_POST['size'];
            $product = new CD($sku, $name, $price, $size);
            break;
        case 'book':
            $weight = $_POST['weight'];
            $product = new Book($sku, $name, $price, $weight);
            break;
        case 'chair':
            $height = $_POST['height'];
            $width = $_POST['width'];
            $length = $_POST['length'];
            $product = new Chair($sku, $name, $price, $height, $width, $length);
            break;
    }

    if ($product->save() && $product->saveDetails()) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error saving product";
    }
}

?>
