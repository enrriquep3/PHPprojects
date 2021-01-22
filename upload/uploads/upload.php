<?php

if(isset($_POST['submit'])) {
 $file = $_FILES['file'];
 $name = $_FILES['file']['name']; //find file name
 $tmp_name = $_FILES['file']['tpm_name']; //find temporary name
 $size = $_FILES['file']['size']; //find file size
 $error = $_FILES['file']['error']; //find error


//explode from punctuation mark
$tempExtension = explode('.', $name);

$fileExtension = strtolower(end($tempExtension));

$isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

if(in_array($fileExtension, $isAllowed)){
    //0 is no error ... 1 is error
    if($error === 0){
        if($size < 30000) {
              $newFileName = uniqid('', true ) . "." . $fileExtension;
              $fileDestination = "uploads/upload.php" . $newFileName;
              move_uploaded_file($tmp_name, $fileDestination);
              header("Location: files.php?uploadedsuccess");   
        } else{
            echo " sorry your file size is too big";
        }   
         }else{
        echo "Sorry, there was an error! try again";
    }
}else {
    echo "Sorry your file is not accepted";
}
}
