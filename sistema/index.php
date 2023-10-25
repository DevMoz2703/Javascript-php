<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <title>Login</title>
    <style>
        body{
            background-color: #f2f2f2;
        }

        .login{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Acesso restrito</h3>
                    </div>
                    <div class="card-body">
                    <form action="login.php" method="post">
                    <div class="">
                        <div class="mb-3">
                            <label>Usuario:</label>
                            <input type="text" name="usuario" class="form-control">
                        </div>
                    </div>
                    <div class="">
                        <div class="mb-3">
                            <label>Password:</label>
                            <input type="password" name="senha" class="form-control">
                        </div>
                    </div>
                    <div class="">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>



    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>