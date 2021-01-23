<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$filePath = "../upload/uploads/file.txt";

$output = file_get_contents($filePath);

echo $output;
    ?>
</body>
</html>