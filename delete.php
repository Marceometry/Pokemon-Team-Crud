<?php

    require_once 'vendor/autoload.php';
    $id = $_GET['id'];

    $pokemonDao = new \App\Model\TeamDao();
    $pokemonDao->delete($id);

    header("Location:index.php");
	
?>
