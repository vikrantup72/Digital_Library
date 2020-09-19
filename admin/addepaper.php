<?php include './template/header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload the E-Paper</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <h1>Select E-Paper File to Upload:</h1>
    <input type="file" name="file"><br>
    <input type="submit" name="submit" value="Upload">
</form>
</body>
</html>
<?php include './template/footer.php'; ?>