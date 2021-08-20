<?php
include_once("config.php");

// BOTEI DE EXEMPLO, ACHO Q NEM VAI DAR PRA USAR MYSQLI
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>
    <title>Time Pokémon</title>
</head>

<body>
<a href="add.php">Adicionar Pokémon</a><br/><br/>

    <table>

    <tr>
        <th>Nome</th> <th>Tipo</th> <th>Editar</th> <th>Deletar</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a></td>";
        echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>