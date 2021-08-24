<?php

require_once 'vendor/autoload.php';

$pokemonDao = new \App\Model\TeamDao();

?>

<html lang="pt-BR">
    <head>
	    <link rel="stylesheet" href="./styles/global.css">
        <title>Time Pokémon</title>
    </head>

    <body>
    <a href="add.php">Adicionar Pokémon</a><br/><br/>

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
    </body>
    </html>