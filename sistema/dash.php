<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Creche - Dashboard</title>
  <!-- Adicionar link para o arquivo CSS do Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <style>
    html,
    body {
      height: 100%;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: -250px;
        height: 100%;
        width: 250px;
        padding-top: 1rem;
        background-color: #f8f9fa;
        z-index: 1;
        transition: left 0.3s ease-in-out;
    }

    .sidebar.active {
        left: 0;
    }

    .content {
        margin-left: 0;
        padding: 1rem;
    }

    .footer {
        background-color: #f8f9fa;
        padding: 1rem;
        text-align: center;
    }

    @media (min-width: 768px) {
        .sidebar {
            position: sticky;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            padding-top: 1rem;
            background-color: #f8f9fa;
            z-index: 1;
            transition: none;
        }

        .content {
            margin-left: 5px;
            padding: 1rem;
        }

        .footer {
            position: relative;
            bottom: unset;
            width: unset;
            text-align: center;
        }

        .sidebar,
        .content {
            display: inline-block;
            vertical-align: top;
        }
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="dashboard.php" class="navbar-brand">Sigc-Montessori</a>
            <?php
                print "ola! ".$_SESSION['nome'];
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>";

            ?>
        </div>
    </nav>
    <div class="main-container" style="display: flex; width:auto;">
        
            <section class="sidebar container-fluid">
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Contato</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Informações</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Vídeos</a>
                </li>
              </ul>
        </section>
        
        
       
          
            <div class="content container-fluid">
                
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Sistema de Creche</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Matrículas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Turmas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Educadores</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        
              <h1>Dashboard</h1>
        
              <div class="row">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Matrículas</h5>
                      <p class="card-text">Gerencie as matrículas dos alunos.</p>
                      <a href="#" class="btn btn-primary">Ir para Matrículas</a>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Turmas</h5>
                      <p class="card-text">Gerencie as turmas dos alunos.</p>
                      <a href="#" class="btn btn-primary">Ir para Turmas</a>
                    </div>
                  </div>
                </div>
        
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Educadores</h5>
                      <p class="card-text">Gerencie os educadores da creche.</p>
                      <a href="#" class="btn btn-primary">Ir para Educadores</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              
        
            
        
          
    </div>
  
    <div class="footer">
        © 2023 Sistema de Creche. Todos os direitos reservados.
      </div>
  <!-- Adicionar scripts do Bootstrap no final do documento para melhorar o desempenho -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
