<?php

if (isset($_POST['upload'])) {

    // Folder where files will be stored
    $targetDir = "uploads/";

    // Create folder if not exists
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES["myfile"]["name"]);
    $targetFile = $targetDir . $fileName;

    // Move file from temporary storage to your folder
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
        echo "File uploaded successfully: " . $fileName;
    } else {
        echo "Error uploading file!";
    }
}
?>
