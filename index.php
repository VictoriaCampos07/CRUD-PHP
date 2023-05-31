<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>CRUD usuarios</title>
</head>
<body>
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <h1>Crear un Usuario</h1>
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="lastname" placeholder="Apellido">
            <input type="text" name="idnumber" placeholder="Identificación">

            <input type="submit" value="Agregar usuario">
        </form>
    </div>
    <div  class="users-table">
        <h2>Lista de usuarios</h2>
        <table>
            <thread>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Identificacion</th>
                    <th></th>
                    <th></th>
                </tr>
            </tread>
            <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['lastname'] ?></th>
                        <th><?= $row['idnumber'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
               </tbody>
        </table>
    </div>


</body>
</html>