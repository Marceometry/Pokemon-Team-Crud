<?php

require_once 'vendor/autoload.php';
$id = $_GET['id'];

?>

<html lang="pt-BR">
<head>
	<link rel="stylesheet" href="./styles/global.css">
	<link rel="stylesheet" href="./styles/page.css">
	<link rel="shortcut icon" href="./assets/pokeball.svg" type="image/svg">
	<title>Atualizar Pokémon</title>
</head>

<body>
	<header>
		<a href="index.php">
			<h1>Logo</h1>
		</a>
	</header>

	<main>
		<div class="go-back">
			<a href="index.php">Voltar</a>
		</div>

		<form action="update.php" method="post" name="form2">
			<fieldset>
				<label for="name">Nome:</label>
				<input type="text" name="name">
			</fieldset>

			<fieldset>
				<label for="elem_first">Elemento Principal:</label>
				<input type="text" name="elem_first">
			</fieldset>
				
			<fieldset>
				<label for="elem_second">Elemento Secundário ("nenhum" se não houver):</label>
				<input type="text" name="elem_second">
			</fieldset>

			<input type="hidden" name="id" value="<?php echo $id;?>" />
			<button type="submit" name="update" value="Atualizar">Atualizar</button>
		</form>
	</main>

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