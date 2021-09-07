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

    <?php

    require "app/view/administrativo/header.php";
    ?>

    <div class="container-fluid">
        <div class="row">
            <?php

            require "app/view/administrativo/sidebar.php";
            ?>
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
                        echo $_SESSION['nome'];
                        // echo "Seu ip" . $_SERVER['REMOTE_ADDR'];
                        ?>
                        <input  class="btn text-danger" width="100px" heith="40px" id="tempo" type="numer">
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

                <div class="dash container">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 test border border-1  pb-0 my-0">
                            <p class="list-group">total de lojistas</p>
                            <span class="badge bg-primary rounded-pill">0</span>
                        </div>

                        <div class="col-md-2 col-sm-4 test border border-1 pb-0 my-0">
                            <p class="list-group">total de Profissionais</p>
                            <span class="badge bg-primary rounded-pill">0</span>
                        </div>
                        <div class="col-md-2 col-sm-4 test border border-1 pb-0 my-0">
                            <p class="list-group">total de Parceiros </p>
                            <span class="badge bg-primary rounded-pill">0</span>
                        </div>
                        <div class="col-md-2 col-sm-4 test border border-1 pb-0 my-0">
                            <p class="list-group">total de Clientes</p>
                            <span class="badge bg-primary rounded-pill">
                                <?php
                                $cliente = Cliente::view();
                                echo count($cliente);
                                ?>
                            </span>
                        </div>
                        <div class="col-md-2 col-sm-4 test border border-1 pb-0 my-0">
                            <p class="list-group">total de Vagas</p>
                            <span class="badge bg-primary rounded-pill">0</span>
                        </div>
                        <div class="col-md-2 col-sm-4 test border border-1 pb-0 my-0">
                            <p class="list-group">total de Novidades</p>
                            <span class="badge bg-primary rounded-pill">0</span>
                        </div>
                    </div>
                </div>

                <!--<h2>Section title</h2>-->
                <!--<div class="table-responsive">
                    <table class="table table-striped table-sm">
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
                                <td>sww</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                        </tbody>
                    </table>
                </div>-->
            </main>
        </div>
    </div>
    <script>
        function horario() {
            var data = new Date()
            var hor = data.getHours()
            var min = data.getMinutes()
            var seg = data.getSeconds()
            if (hor < 10) {
                hor = "0" + hor
            }
            if (min < 10) {
                min = "0" + min
            }
            if (seg < 10) {
                seg = "0" + seg
            }
            var horas = hor + ":" + min + ":" + seg
            document.getElementById("tempo").value = horas
        }
        var tempo = setInterval(horario, 1000)
    </script>

    <!--<footer class="footer text-center"> 2021 © Ti Indiko <a href="#">tiindiko.com.br</a>
    </footer>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="public/js/administrador.js"></script>
</body>

</html>