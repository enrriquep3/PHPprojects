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

 // $cars = array("Audi"=> 50.500, "BMW" => 40.700, "Mercedes" => 60.300);
 // foreach ( $cars as $key => $value) {
  //    echo "My " . $key . " has " . $value . " mileage <br>";
  //}

  //Multidimentional Arrat

  $cars = array("Expensive" => array("Audi", "Mercedes", "BMW"),
              "Inexpensive" => array("Volvo, Ford, Toyota")
              );
echo $cars["Expensive"][0];


    ?>
</body>
</html>
