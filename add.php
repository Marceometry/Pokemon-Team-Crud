<?php

require_once 'vendor/autoload.php';

?>

<html lang="pt-BR">
<head>
	<link rel="stylesheet" href="./styles/global.css">
	<link rel="stylesheet" href="./styles/page.css">
	<link rel="shortcut icon" href="./assets/pokeball.svg" type="image/svg">
	<title>Adicionar Pokémon</title>
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

		<form action="add.php" method="post" name="form1">
			<fieldset>
				<label for="name">Nome:</label>
				<input type="text" name="name">

				<label for="elem_first">Elemento Principal:</label>
				<input type="text" name="elem_first">
				
				<label for="elem_second">Elemento Secundário (digite "nenhum" se não houver):</label>
				<input type="text" name="elem_second">
			</fieldset>

			<button type="submit" name="add" value="Adicionar">Adicionar</button>
		</form>
	</main>

	<?php

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