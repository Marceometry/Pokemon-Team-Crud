<?php

require_once 'vendor/autoload.php';

$pokemon = new \App\Model\Team();
$pokemon->setName('Bulbassauro');
$pokemon->setElemFirst('grama');
$pokemon->setElemSecond('veneno');

$pokemonDao = new \App\Model\TeamDao();
$pokemonDao->create($pokemon);

?>

<html>
    <head>
        <title>Time Pokémon</title>
    </head>

    <body>
    <a href="">Adicionar Pokémon</a><br/><br/>

        <table>

        <tr>
            <th>ID</th> <th>Nome</th> <th>Elemento Principal</th> <th>Elemento Secundário</th> <th>Editar</th> <th>Deletar</th>
        </tr>
        
        </table>
    </body>
    </html>