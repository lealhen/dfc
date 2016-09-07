<?php include "db.php";
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data" name="uploadform">
    <input type="hidden" name="MAX_FILE_SIZE" value="350000">
    <input name="fileToUpload" type="file" id="picture" size="50">
    <input name="submit" type="submit" id="upload" value="Upload Picture!">
</form>

</body>
</html>