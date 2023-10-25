<?php
include "dbconn.php";

// Verifique se a variável GET 'id' existe antes de usá-la
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST['submit'])) {
        // Usando declarações preparadas para evitar SQL Injection
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);

        $sql = "UPDATE `crud` SET `first_name`=?, `last_name`=?, `email`=?, `gender`=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssi", $first_name, $last_name, $email, $gender, $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            header("Location: index.php?msg=Atualizado com sucesso");
            exit();
        } else {
            echo "Falhou: " . mysqli_error($conn);
        }
    }

    $sql = "SELECT * FROM `crud` WHERE id = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
}
?>





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
<body class=" text-light">
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: orangered;box-shadow: 0 0 20px #3d3d3d;">
        Crud Aplication
    </nav>
    <div class="container bg-dark text-light" style="border-radius: 10px; width:400px; box-shadow: 0 0 20px #3d3d3d;">
        <div class="text-center mb-4 ">
             <h3 class="mt-3"  ; style="padding-top: 15px; ">Editar informacoes do usuario</h3>
             <p class=" text-light">
                Click em actualizar depois de mudar alguma informacao.
             </p>
        </div>

        <?php

        $id = $_GET['id'];
        $sql = "SELECT * FROM `crud` WHERE Id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        ?>

        <div class="container d-flex justify-content-center text-light"style="box-shadow: 0 0 20px #3d3d3d;">
        <form action="novo.php" method="post" style="width:50vw; min-width: 300px;">
         <div class="row mb-3">
            <div class="col">
                <label for="" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="first_name" value="<?php echo
                $row['first_name']  ?>">
            </div>

            <div class="col">
                <label for="" class="form-label">Sobrenome:</label>
                <input type="text" class="form-control"  name="last_name" value="<?php echo
                $row['last_name']  ?>">
            </div>
         </div>

         <div class="mb-3">
         <label for="" class="form-label">Email:</label>
            <input type="email" class="form-control" value="<?php echo
                $row['email']  ?>" name="email">
            </div>  

            <div class="form-group mb-3 d-flex justify-content-center gap-2">
            <label >Genero:</label> &nbsp;
            <input type="radio" name="gender" id="masculino" value="Masculino" class="form-check-input" <?php echo($row['gender']=='masculino')?"checked":""; ?>>
            <label class="form-input-label">Masculino</label>
            &nbsp;
            <input type="radio" name="gender" id="feminino" value="Feminino" class="form-check-input" <?php echo($row['gender']=='feminino')?"checked":""; ?>>
            <label class="form-input-label">Feminino</label>


         </div>

         </div>

         <div class=" d-flex justify-content-center gap-3 p-3">
            <button type="submit" class="btn btn-primary" name="submit">Actualizar</button>

            <a href="index.php" class="btn btn-danger">Cancelar</a>
         </div>
        </form>
        
    </div>
    
</div>

<script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap5/js/bootstrap.min.js"></script>s
</body>
</html>