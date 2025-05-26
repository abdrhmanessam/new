<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $price = $_POST["price"]; 
    
/*--------------------------------*/
    function calculatetax($price){
        return $price *0.14;
    }

/*--------------------------------*/


    echo "price after Disscount : " . calculatetax($price) ; 
}

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>disscount </title>
</head>
<body>

    <h2>Enter Your product price: </h2>

    <form method="post">
        <label for="price">price : </label>
        <input type="number" name="price" id="price" required>
        <input type="submit" value="send">
    </form>


</body>
</html>
