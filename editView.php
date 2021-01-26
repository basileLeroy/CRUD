<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Goodcard - Edit your collection</title>
</head>
<body>

<h1>Goodcard - Edit your collection</h1>

<!-- <?php 
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";
?> -->
<ul>
    <li><?= $_GET["name"]; ?></li>
</ul>

<br><br>
<hr>
<br>
<!-- <?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
?> -->

<form action="" method="POST">
	<h4>Change your item!</h4>
	<br>
	<input type="text" name="updatedName" placeholder="New name of the marble">
	<br>
	<button type="submit" style="background-color: #bbf1fa; color: black;" name="save" value="saved">Save</button>
    <button type="submit" style="background-color: #f05454; color: white;" value="delete" name="delete">Delete</button>
</form>

</body>
</html>
