<?php
session_start();
$email=strval($_SESSION['email']);
$target_dir = "profilepics/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
     {
        mysql_connect('localhost', 'root', '') or trigger_error("Unable to connect to the database: " . mysql_error()); 
        mysql_select_db('documents') or trigger_error("Unable to switch to the database: " . mysql_error()); 

        mysql_query("insert into `profilepics` values('$email','$target_file')")or die(mysql_error());
         mysql_select_db('users') or trigger_error("Unable to switch to the database: " . mysql_error()); 
        $query=mysql_query("select `Category` from `userdata` where EmailID='$email'")or die(mysql_error());
        $row=mysql_fetch_array($query);
        $type=$row['Category'];
        if($type=='Student')
                header("Location:home.php");
            else
                header("Location:teacher.php");
        }
     else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>
