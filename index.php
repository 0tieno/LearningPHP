
<!-- MATH FUNCTIONS -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">X</label>
        <input type="text" name="x" id="x">
        <br>
        <label for="">Y</label>
        <input type="text" name="y" id="y">
        <br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];

    $total = $x + $y;
    echo "TOTAL is  {$total}";
    $total = abs($x - $y);


    // associative arrays
    $capitals = [
        "Italy" => "Rome",
        "France" => "Paris",
        "Germany" => "Berlin"
    ];

    foreach($capitals as $country => $capital){
        echo "The capital of {$country} is {$capital} <br>";
    }

    // simple arrays
    $capitals = ["Rome", "Paris", "Berlin"];
    echo $capitals[0];
    foreach($capitals as $capital){
        echo $capital . "<br>";
    }

    // array methods
    $capitals = ["Rome", "Paris", "Berlin"];
    array_push($capitals, "London");
    

?>


