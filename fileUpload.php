<?php

if(isset($_FILES["image"])){

    echo "<pre>";
    echo print_r($_FILES);
    echo "</pre>";

    $file_name = $_FILES['image']['name'];
    $tmpFile_name = $_FILES['image']['tmp_name'];

   $status =  move_uploaded_file($tmpFile_name, "upload/". $file_name);

   if($status){
    echo "File Uploaded Successfully!<br>";
   }
   else{
    echo "Couldn't upload file!";
   }
}


?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image"> <br><br>
    <input type="submit" value="Upload" name="submit">
</form>