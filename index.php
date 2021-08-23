<?php

require_once 'vendor/autoload.php';

$pokemon = new \App\Model\Team();
$pokemon->setName('blabla');
$pokemon->setElemFirst('blabla');
$pokemon->setElemSecond('blabla');

$pokemonDao = new \App\Model\TeamDao();

?>

<html>
    <head>
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
                echo "<td><a href='update.php?id=$pokemon[id]'>Edit</a></td>";
                echo "<td><a href='delete.php?id=$pokemon[id]'>Delete</a></td></tr>";
            }
        ?>
        
        </table>
    </body>
    </html>