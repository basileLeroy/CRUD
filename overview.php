  
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Goodcard - track your collection of marbles</title>
</head>
<body>

<h1>Goodcard - track your collection of marbles</h1>

<ul>

<?php foreach ($cards as $card) : ?>
	<form method="GET">
		<li><?= $card['name']?> <span style="font-size: 10px;"><a href="edit.php?name=<?= $card['name'] ?>">edit</a></span></li>
	</form>
<?php endforeach; ?>
</ul>
<br><br>
<hr>
<br>
<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
?>

<form action="" method="POST">
	<h4>Add a new item to the list!</h4>
	<br>
	<input type="text" name="add" placeholder="Name of the marble">
	<br>
	<button type="submit" name="submit">add to list</button>
</form>

</body>
</html>