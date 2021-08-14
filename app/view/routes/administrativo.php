<?php
session_start();
if ((!isset($_SESSION['email'])) && (!isset($_SESSION['senha']))) {
    header('location:./admin');
    $_SESSION['UserEmpty'] = "usuario não esta ativo no sistema";
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Painel Administrativo Tiindiko</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="public/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="public/plugins/images/logo.png" alt="Logo Tindiko" width="120px"></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="app/controller/disableAdmin.php">Sair</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="administrativo">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a ca class="nav-link" href="clientes">
                                <span data-feather="user"></span>
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lojistas">
                                <span data-feather="package"></span>
                                Lojistas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profissionais">
                                <span data-feather="package"></span>
                                Profissionais
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="parceiros">
                                <span data-feather="users"></span>
                                Parceiros e Vagas de Emprego
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="planos">
                                <span data-feather="clipboard"></span>
                                Planos de Assinaturas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="usuarios">
                                <span data-feather="layers"></span>
                                Usuários Permissões e Perfis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categorias">
                                <span data-feather="layers"></span>
                                Categorias
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="novidades">
                                <span data-feather="layers"></span>
                                Novidades e Promoções
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="newsletters">
                                <span data-feather="layers"></span>
                                Newsletters
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="comentarios">
                                <span data-feather="layers"></span>
                                Comentários
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="avaliacoes">
                                <span data-feather="layers"></span>
                                Avaliações
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sugestoes">
                                <span data-feather="layers"></span>
                                Sugestões
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notificacoes">
                                <span data-feather="layers"></span>
                                Notificações
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="financeiro">
                                <span data-feather="layers"></span>
                                Extrato Financeiro
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pagamentos">
                                <span data-feather="layers"></span>
                                Pagamentos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="vendas">
                                <span data-feather="layers"></span>
                                Vendas / Adesões
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cobranca">
                                <span data-feather="layers"></span>
                                Boleto de Cobrança
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="grafico">
                                <span data-feather="layers"></span>
                                Grafico de Vendas
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">
                        <?php
                        if (date('H') < 12) {
                            echo "Bom dia, ";
                        } elseif (date('H')  < 18) {
                            echo "Boa Tarde, ";
                        } else {
                            echo "Boa Noite!, ";
                        }
                        echo $_SESSION['sobre_nome'];
                        echo "Seu ip". $_SERVER['REMOTE_ADDR'];
                        ?>
                    </h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Compartilhar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            Esta Semana
                        </button>
                    </div>
                </div>

                <canvas  class=" my-4 w-100" id="myChart" width="900" height="380"></canvas>

                <!--<h2>Section title</h2>-->
                <div class="table-responsive">
                    <!--<table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1,001</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                        </tbody>
                    </table>-->
                </div>
            </main>
        </div>
    </div>


    <footer class="footer text-center"> 2021 © Ti Indiko <a href="#">tiindiko.com.br</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="public/js/administrador.js"></script>
</body>

</html>