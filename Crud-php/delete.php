<?php
include "dbconn.php";

// Verifique se a variável GET 'id' existe antes de usá-la
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Exclua o registro com o ID correspondente usando uma declaração preparada
    $sql = "DELETE FROM `crud` WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header("Location: index.php?msg=Registro excluído com sucesso");
        exit();
    } else {
        echo "Falhou: " . mysqli_error($conn);
    }
}
?>