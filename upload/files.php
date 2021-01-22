<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//enctype: the way to encode data to transport it

echo $name = $_FILES['file']['name'];
echo $type = $_FILES['file']['type'];

    ?>
    
    <form action="files.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" >
    <button type="submit">Submit</button>
    </form>


</body>
</html>