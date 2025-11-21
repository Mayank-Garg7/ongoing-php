<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Select a file:</label><br><br>
        <input type="file" name="myfile" required>
        <br><br>
        <input type="submit" name="upload" value="Upload File">
    </form>

</body>
</html>
