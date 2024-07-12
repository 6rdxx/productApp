<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <section id="header">
        <a href="index.php" class="page_title">Product List</a>
        <div id="navbar">
            <button id="add_button">ADD</button>
            <button>MASS DELETE</button>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <form action="save_product.php">
            <div class="form-container">

                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" id="sku" name="sku" value=" ">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value=" ">
                </div>
                <div class="form-group">
                    <label for="price">Price ($)</label>
                    <input type="float" id="price" name="price" value="">
                </div>
                <div class="form-group">
                    <label for="type">Type Switcher</label>
                    <select id="type" name="type">
                        <option value="cd">CD</option>
                        <option value="book">Book</option>
                        <option value="chair">Chair</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="weight">Weight (KG)</label>
                    <input type="number" id="weight" name="weight" value=" ">
                </div>
                <input type="submit" value="Submit">
            
            </div>
        </form>  

    </section>


    
    <footer  class="footer">
        <h4 class="footer-text">Scandiweb Test Assignment</h4>
    </footer>
   
</body>
</html>