<?php

require_once 'vendor/autoload.php';
$id = $_GET['id'];

$pokemonDaoUp = new \App\Model\TeamDao();
$pokemonUp = new \App\Model\Team();
$pokemonUp->setId($id);

foreach($pokemonDaoUp->readOnce($pokemonUp) as $pokemon) {
	$nameUp = $pokemon['name'];
	$elemFirstUp = $pokemon['elem_first'];
	$elemSecUp = $pokemon['elem_second'];
}

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
			<h1>PokéTeam</h1>
		</a>
	</header>

	<main>
		<div class="go-back">
			<a href="index.php">
				<img src="./assets/icons/arrow-back.svg" alt="<-">
				<span>Voltar</span>
			</a>
		</div>

		<form action="update.php" method="post" name="form2">
			<fieldset>
				<label for="name">Nome:</label>
				<input type="text" name="name" value=<?php echo $nameUp;?>>
			</fieldset>

			<fieldset>
				<label for="elem_first">Elemento Principal:</label>
				<input type="text" name="elem_first" value=<?php echo $elemFirstUp;?>>
			</fieldset>
				
			<fieldset>
				<label for="elem_second">Elemento Secundário (digite "nenhum" se não houver):</label>
				<input type="text" name="elem_second" value=<?php echo $elemSecUp;?>>
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