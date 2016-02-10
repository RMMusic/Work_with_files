<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11.01.2016
 * Time: 19:31
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<form action="script.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>