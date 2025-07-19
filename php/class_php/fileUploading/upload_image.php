<?php 
// $con = mysqli_connect(hostname, username, password, database)
$conn = mysqli_connect("localhost", "root", "", "files");
if (!$conn) {
    die("Error while connecting to the database");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_name = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name']; // fixed 'tmp_name'
    $folder = 'uploads/' . $file_name;
    
    // Save file name to DB
    $query = "INSERT INTO images (image) VALUES ('$file_name')";
    $sql = mysqli_query($conn, $query);
    
    if (move_uploaded_file($temp, $folder)) {
        echo "<h2>File uploaded successfully</h2>";
    } else {
        echo "<h2>Something went wrong while uploading</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload File</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <!-- fixed enctype -->
            <input type="file" name="file" required>
            <br><br>
            <button type="submit" name="done">Submit</button>
        </form>
        <h3>Uploaded Images:</h3>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $res = mysqli_query($conn, "SELECT * FROM images");
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $img = $row['image'];
                    echo '
                        <div>
                            <img src="uploads/' . $img . '" alt="Image">
                        </div>
                    ';
                }
            } else {
                echo "No images found.";
            }
        }
        ?>
</body>
</html>