<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

// $name = "Enrrique";
 //echo "My name is" .$name. "<br>";
 //echo $name ." is 24 years old" . "<br>";

//Variables names
// start with a letter A-Z 
$cars = array("bmw", "Audi", "mercedes");
echo $cars[2];

echo "<br>";
$myCar = array("Audi", 2015, 75.351);
print_r($myCar);

$cars2 = array("Volve", "Chevy", "Toyota");

$cars = array_merge($cars, $cars2);
echo "<br>";
print_r($cars);





  
    ?>
</body>
</html>
