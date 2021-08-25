<?php

require_once 'vendor/autoload.php';

$pokemonDao = new \App\Model\TeamDao();

?>

<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/page.css">
	<link rel="shortcut icon" href="./assets/pokeball.svg" type="image/svg">
    <link
    rel="preload"
    href="./assets/fonts/lms-pokedex-font/LmsPokedex-XEja.ttf"
    as="font"
    crossOrigin=""
    />
    <title>Poké Team</title>
</head>

<body>
    <header>
		<a href="index.php">
			<h1>Poké Team</h1>
		</a>
    </header>
    
    <main>    
        <table>
            <tr>
                <th>Nome</th> <th>Elemento Principal</th> <th>Elemento Secundário</th> <th>Editar</th> <th>Deletar</th>
            </tr>
            <?php
                foreach($pokemonDao->read() as $pokemon) {
                    echo "<tr>";
                    echo "<td>".$pokemon['name']."</td>";
                    echo "<td>".$pokemon['elem_first']."</td>";
                    echo "<td>".$pokemon['elem_second']."</td>";
                    echo "<td><a href='update.php?id=$pokemon[id]'>Editar</a></td>";
                    echo "<td><a href='delete.php?id=$pokemon[id]'>Deletar</a></td></tr>";
                }
            ?>
        </table>
        
        <a href="add.php" class="button-big">Adicionar Pokémon</a>
    </main>
</body>
</html>