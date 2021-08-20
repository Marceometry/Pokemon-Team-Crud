<html>
<head>
	<title>Adicionar Pokémon</title>
</head>

<body>
	<a href="index.php">Voltar</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table>
			<tr>
				<td>Nome</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Tipo</td>
				<td><input type="text" name="type"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Adicionar" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$type = $_POST['type'];

		// include database connection file
		// include_once("config.php");

		// Insert user data into table
		// $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

		// Show message when user added
		// echo "Pokémon adicionado com sucesso. <a href='index.php'>Ver time</a>";
        // header("Location:index.php");
	}
	?>
</body>
</html>