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

    require "app/view/routes/header.php";
    ?>

    <div class="container-fluid">
        <div class="row">
            <?php

            require "app/view/routes/sidebar.php";
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
                        //echo "Seu ip" . $_SERVER['REMOTE_ADDR'];
                        ?>
                        <input class="btn text-danger" width="100px" heith="40px" id="tempo" type="numer">
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

                <!--<div class="dash container">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 test border border-1  pb-0 my-0">
                            <p class="list-group">total de lojistas</p>
                            <span class="badge bg-primary rounded-pill">146</span>
                        </div>

                        <div class="col-md-2 col-sm-4 test border border-1 pb-0 my-0">
                            <p class="list-group">total de Profissionais</p>
                            <span class="badge bg-primary rounded-pill">1488</span>
                        </div>
                        <div class="col-md-2 col-sm-4 test border border-1 pb-0 my-0">
                            <p class="list-group">total de Parceiros </p>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </div>
                        <div class="col-md-2 col-sm-4 test border border-1 pb-0 my-0">
                            <p class="list-group">total de Clientes</p>
                            <span class="badge bg-primary rounded-pill">77</span>
                        </div>
                        <div class="col-md-2 col-sm-4 test border border-1 pb-0 my-0">
                            <p class="list-group">total de Vagas</p>
                            <span class="badge bg-primary rounded-pill">149</span>
                        </div>
                        <div class="col-md-2 col-sm-4 test border border-1 pb-0 my-0">
                            <p class="list-group">total de Novidades</p>
                            <span class="badge bg-primary rounded-pill">4</span>
                        </div>
                    </div>
                </div>-->

                <h2>Clientes</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Codígo</th>
                                <th>Nome</th>
                                <th>Sobre nome</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Situação</th>
                                <th>Data De Cadastro</th>
                                <th rowspan="2"><button type="button" class="btn  btn-success" data-bs-toggle="modal" data-bs-target="#cadastrarCliente">Novo Cliente</button></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cliente = Cliente::view();
                            $arrayCliente = $cliente;

                            for ($i = 0; $i < count($arrayCliente); $i++) {
                                foreach ($arrayCliente[$i] as $key => $valor) {
                                    $valor;
                                }
                                echo "<td>" . $arrayCliente[$i]['id'];
                                echo "<td>" . $arrayCliente[$i]['nome'];
                                echo "<td>" . substr($arrayCliente[$i]['sobre_nome'], -10);
                                echo "<td>" . $arrayCliente[$i]['email'];
                                echo "<td>" . "<a href=https://api.whatsapp.com/send/?phone=+55" . $arrayCliente[$i]['telefone'] . "&text=Ola," . "%20" . $arrayCliente[$i]['nome'] . "&app_absent=0" . " " . "target=_blank" . ">" . $arrayCliente[$i]['telefone'] . '</a>' . "</td>";
                                echo "<td>" . $arrayCliente[$i]['situacao'];
                                echo "<td>" . $arrayCliente[$i]['data_de_cadastro'];

                            ?>
                                <td><button class="btn btn-link" data-bs-toggle="modal" data-bs-target="#visualizarCliente" data-bs-id="<?php echo $arrayCliente[$i]['id'] ?>" data-bs-nome="<?php echo $arrayCliente[$i]['nome'] ?>" data-bs-sobre_nome="<?php echo $arrayCliente[$i]['sobre_nome'] ?>" data-bs-email="<?php echo $arrayCliente[$i]['email'] ?>" data-bs-telefone="<?php echo $arrayCliente[$i]['telefone'] ?>">Vizualizar</button>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alterarCliente" data-bs-id="<?php echo $arrayCliente[$i]['id'] ?>" data-bs-nome="<?php echo $arrayCliente[$i]['nome'] ?>" data-bs-sobre_nome="<?php echo $arrayCliente[$i]['sobre_nome'] ?>" data-bs-email="<?php echo $arrayCliente[$i]['email'] ?>" data-bs-telefone="<?php echo $arrayCliente[$i]['telefone'] ?>">Alterar</button>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DesativarCliente">Desativar</button>
                                </td>
                            <?php

                                echo "</tr>";
                            }
                            ?>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <!--modal Cadastro-->
    <div class="modal fade" id="cadastrarCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="app/controller/controllerCliente.php" method="POST">
                        <div class="row">
                            <div class="col-md-7">
                                <label for="recipient-name" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>
                            <div class="col-md-5">
                                <label for="message-text" class="col-form-label">Sobre Nome:</label>
                                <input type="text" class="form-control" id="sobre_nome" name="sobre_nome">
                            </div>
                            <div class="col-md-8">
                                <label for="recipient-name" class="col-form-label">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col-md-4">
                                <label for="message-text" class="col-form-label">Telefone:</label>
                                <input type="tel" class="form-control" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" id="telefone" name="telefone">
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" value="<?php echo 'Ativo'; ?>" id="situacao" name="situacao">
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" value="<?php echo date('d,m,Y'); ?>" id="data_de_cadastro" name="data_de_cadastro">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" name="Cadastrar" value="Cadastrar">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--fim Modal Cadastro-->

    <!--modal alterar-->
    <div class="modal fade" id="alterarCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="app/controller/controllerCliente.php" method="POST">
                        <div class="row">
                            <div class="col-md-7">
                                <label for="recipient-name" class="col-form-label">Id:</label>
                                <input type="hidden" class="form-control" id="id" name="id">
                            </div>
                            <div class="col-md-7">
                                <label for="recipient-name" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>
                            <div class="col-md-5">
                                <label for="message-text" class="col-form-label">Sobre Nome:</label>
                                <input type="text" class="form-control" id="sobre_nome" name="sobre_nome">
                            </div>
                            <div class="col-md-8">
                                <label for="recipient-name" class="col-form-label">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col-md-4">
                                <label for="message-text" class="col-form-label">Telefone:</label>
                                <input type="tel" class="form-control" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" id="telefone" name="telefone">
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" value="<?php echo 'Ativo'; ?>" id="situacao" name="situacao">
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" value="<?php echo date('d,m,Y'); ?>" id="data_de_cadastro" name="data_de_cadastro">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-primary" name="Alterar" value="Alterar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--fim Modal Cadastro-->

    <!--modal deletar-->
    <div class="modal fade" id="visualizarCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vizualizar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Id:</label>
                            <input type="text" class="form-control" id="id">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Nome:</label>
                            <textarea class="form-control" id="nome"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Imprimir</button>
                </div>
            </div>
        </div>
    </div>
    <!--fim Modal deletar-->
    <!--<footer class="footer text-center"> 2021 © Ti Indiko <a href="#">tiindiko.com.br</a>
    </footer>-->
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
    <script>
        var visualizarCliente = document.getElementById('visualizarCliente')
        visualizarCliente.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var recipient = button.getAttribute('data-bs-whatever')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = visualizarCliente.querySelector('.modal-title')
            var modalBodyInput = visualizarCliente.querySelector('.modal-body input')

            modalTitle.textContent = 'Mostrar Cliente Código:' + id
            modalBodyInput.value = id
        })
    </script>
    <script>
        var alterarCliente = document.getElementById('alterarCliente')
        alterarCliente.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var id = button.getAttribute('data-bs-id')
            var nome = button.getAttribute('data-bs-nome')
            var sobre_nome = button.getAttribute('data-bs-sobre_nome')
            var email = button.getAttribute('data-bs-email')
            var telefone = button.getAttribute('data-bs-telefone')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = alterarCliente.querySelector('.modal-title')
            var modalBodyInputId = alterarCliente.querySelector('#id')
            var modalBodyInputNome = alterarCliente.querySelector('#nome')
            var modalBodyInputSobreNome = alterarCliente.querySelector('#sobre_nome')
            var modalBodyInputEmail = alterarCliente.querySelector('#email')
            var modalBodyInputTelefone = alterarCliente.querySelector('#telefone')

            modalTitle.textContent = 'Alterar Cliente ' + id
            modalBodyInputNome.value = nome
            modalBodyInputSobreNome.value = sobre_nome
            modalBodyInputEmail.value = email
            modalBodyInputTelefone.value = telefone
        })
    </script>

    <script>
        function mask(o, f) {
            setTimeout(function() {
                var v = mphone(o.value);
                if (v != o.value) {
                    o.value = v;
                }
            }, 1);
        }

        function mphone(v) {
            var r = v.replace(/\D/g, "");
            r = r.replace(/^0/, "");
            if (r.length > 10) {
                r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
            } else if (r.length > 5) {
                r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
            } else if (r.length > 2) {
                r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
            } else {
                r = r.replace(/^(\d*)/, "($1");
            }
            return r;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="public/js/administrador.js"></script>
</body>

</html>