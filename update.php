<?php

require_once 'vendor/autoload.php';
$id = $_GET['id'];

?>

<html lang="pt-BR">
<head>
	<title>Atualizar Pokémon</title>
</head>

<body>
	<a href="index.php">Voltar</a>
	<br/><br/>

	<form action="update.php" method="post" name="form2">
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
				<td><input type="hidden" name="id" value="<?php echo $id;?>" /></td>
				<td><input type="submit" name="update" value="Atualizar"></td>
			</tr>
		</table>
	</form>

	<?php

	if($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];
		$elemF = $_POST['elem_first'];
        $elemS = $_POST['elem_second'];
		$idForm = $_POST['id'];

        $pokemon = new \App\Model\Team();
		$pokemon->setId($idForm);
        $pokemon->setName($name);
        $pokemon->setElemFirst($elemF);
        $pokemon->setElemSecond($elemS);

        $pokemonDao = new \App\Model\TeamDao();
        $pokemonDao->update($pokemon);

        header("Location:index.php");
	}
	?>
</body>
</html> 