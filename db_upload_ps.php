<?php
// Include the database configuration file
include "python_config.php";
$statusMsg = '';


// File upload path
$targetDir = "uploads/";

if(isset($_POST["submit"] )){

if(!empty($_FILES["file"]["name"]))
{
    $fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','mp4');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            
            $insert = $db->query("INSERT into photoshop (filename, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, MP4 & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please Upload a file';
}
 echo "<script > alert('$statusMsg');  window.location='photo_upload.php';  </script>";

}



?>
