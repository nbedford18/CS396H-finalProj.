<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>


<?php
//this code is a modified version of the W3Schools example found here: 
//http://www.w3schools.com/php/php_file_upload.asp


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
//check if the file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists. Try renaming it.";
    $uploadOk = 0;
}
//check if the file is WAY TOO BIG
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
//check if the file has a valid filetype
if($fileType != "pdf" && $fileType != "doc" && $fileType != "odot" && $fileType != "docx") {
    echo "Sorry, only PDF, DOC, DOCX & ODOT files are allowed. Your filetype is " . $fileType;
    $uploadOk = 0;
}
//check if the file should not be uploaded
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded. There should have been another error printed describing why";
// if everything is still ok, try to upload file
} else { 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

</body>
</html>