<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="master.css">
	<link rel="php"  type="php" href="ing.php">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+13px" rel="stylesheet">
	<title>Sorteio</title>

</head>
<body>
	<center>
		<div class="titulo">Sorteio</div>
		<br>
		<br>

<br>

<br>
<form method="post">
<button type="submit" name="sortear">Sortear</button>
</form>
	<?php

if(isset($_POST['sortear']))
{
	include 'connections/conn.php';

	$sql =  "SELECT * from people ORDER BY RAND()
	LIMIT 1;";
	$result = mysqli_query($conn, $sql);



	// output data of each row
	while($row = $result->fetch_assoc()) {

	echo "" . $row["id_interno"]. " - " . $row["nome"]. "<br>";
	}

	$conn->close();


}

?>


	</center>

</body>
</html>
