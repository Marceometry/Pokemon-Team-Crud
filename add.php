<?php

require_once 'vendor/autoload.php';

?>

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
				<td>Elemento Principal</td>
				<td><input type="text" name="elem_first"></td>
			</tr>
            <tr>
				<td>Elemento Secundário (nenhum se não houver)</td>
				<td><input type="text" name="elem_second"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Adicionar" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into table.
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
        $name = $_POST['name'];
		$elemF = $_POST['elem_first'];
        $elemS = $_POST['elem_second'];

        $pokemon = new \App\Model\Team();
        $pokemon->setName($name);
        $pokemon->setElemFirst($elemF);
        $pokemon->setElemSecond($elemS);

        $pokemonDao = new \App\Model\TeamDao();
        $pokemonDao->create($pokemon);

        header("Location:index.php");
	}
	?>
</body>
</html> 