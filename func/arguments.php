<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php


//pass by value
    $num1 = 10;
    $num2 = 10;

    //  parameters

 function add($num1, $num2){
     return $num1 + $num2;
 }
      
    //arguments 
    echo "The number is: " . add($num1, $num2);

 

    // pass by reference 

    $x = 10;

    function addByValue($x) {
        $x += 5;
    }

    function addByReference(&$x)

    ?>
</body>
</html>