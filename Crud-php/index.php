<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Php-Application</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body class="text-light">
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: orangered; box-shadow: 0 0 10px #3d3d3d;">
        Crud Application
    </nav>
    <div class="container">
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button></div>'; 
        }
        ?>
        <a href="novo.php" class="btn btn-info" style="box-shadow: 0 0 10px #3d3d3d;">Adicionar Novo</a>
        <table class="table table-dark table-hover mt-5 text-center" style="background-color: orangered; box-shadow: 0 0 10px #3d3d3d;">
            <thead class="table-info">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "dbconn.php";
                    $sql = "SELECT * FROM `crud`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['Id']?></td>
                            <td><?php echo $row['first_name']?></td>
                            <td><?php echo $row['last_name']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['gender']?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['Id']?>" class="link-light"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete.php?id=<?php echo $row['Id']?>" class="link-light"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

<script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap5/js/bootstrap.min.js"></script>
</body>
</html>
