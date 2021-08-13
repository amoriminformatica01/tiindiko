<!doctype html>
<html lang="pt-BR">

<head>
    <title>Tiindiko Site Oficial</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="public/css/simple-line-icons.css" />
    <link rel="stylesheet" type="text/css" href="public/css/animate.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="public/css/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="public/css/owl.transitions.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,100,200,300,500,600,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps:400,700' rel='stylesheet' type='text/css'>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="60">
    <?php include './app/view/routes/top.php' ?>
    <div class="banner">
        <div class="bg-overlay">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-text">

                            <h2>Busque por <span>Empregos, Serviços, Profissionais </span> e muito mais!</h2>
                            <p>
                            <form id="search-form" method="get" action="/search">
                                <div class="row ">
                                    <div class="col-12">
                                        <div class="row no-gutters">
                                            <div class="col-lg-3 col-md-3 col-sm-12 p-1">
                                                <select class="form-control" id="exampleFormControlSelect1" name='tipo' style="background-color:white;">
                                                    <option value="Profissionais">Profissionais</option>
                                                    <option value="Serviços">Serviços</option>
                                                    <option value="Empregos">Empregos</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12 p-1">
                                                <input type="text" placeholder="Digite sua busca..." class="form-control" id="search" name="busca" style="background-color:white;">
                                            </div>
                                            <div class="col-lg-1 col-md-3 col-sm-12 p-1">
                                                <button type="submit" class="btn btn-danger" style="margin-top:25px">Buscar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </p>
                            <a href="#" class="banner-button">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-box media">
                        <div class="icon-box text-center pull-left media-object"> <i class="icon-bulb"></i> </div>
                        <div class="feature-text media-body">
                            <h4>Cadastre Um serviço para Orçamento</h4>
                            <p class="feature-detail">Cras aliquet et mi id fermentum. Suspendisse eget sodales lorem, vestibulum euismod lectus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-box media pull-left">
                        <div class="icon-box text-center pull-left media-object"> <i class="icon-eye"></i> </div>
                        <div class="feature-text media-body">
                            <h4>Ofereça um Serviço para milhares de usuários</h4>
                            <p class="feature-detail">Cras aliquet et mi id fermentum. Suspendisse eget sodales lorem, vestibulum euismod lectus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="feature-box media pull-left">
                        <div class="icon-box text-center pull-left media-object"> <i class="icon-heart"></i> </div>
                        <div class="feature-text media-body">
                            <h4>Procure e ofereça Oportunidades de Emprego</h4>
                            <p class="feature-detail">Cras aliquet et mi id fermentum. Suspendisse eget sodales lorem, vestibulum euismod lectus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <div id="work" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="container text-center">
                    <h3>Aplicativo</h3>
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="portfolio-item"> <a href="#"> <img class="img-portfolio img-fluid" src="public/images/app-tiindiko.jpg"> </a> </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="portfolio-item"> <a href="#"> <img class="img-portfolio img-fluid" src="public/images/portfolio-2.jpg"> </a> </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="portfolio-item"> <a href="#"> <img class="img-portfolio img-fluid" src="public/images/portfolio-3.jpg"> </a> </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="portfolio-item"> <a href="#"> <img class="img-portfolio img-fluid" src="public/images/portfolio-4.jpg"> </a> </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="view-more">Ver Mais</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <div class="testimonials" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h3>Depoimentos</h3>
                    </div>
                </div>
                <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                    <div id="owl-demo" class="owl-carousel owl-theme test">
                        <div class="item">
                            <p><sup><i class="fa fa-quote-left"></i></sup>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui ante, ornare eget est in, ultricies rutrum elit.<sup><i class="fa fa-quote-right"></i></sup></p>
                            <div class="test-img"> <img src="public/images/team-img-01.jpg" />
                                <p><strong>Yogesh Singh</strong></p>
                            </div>
                        </div>
                        <div class="item">
                            <p><sup><i class="fa fa-quote-left"></i></sup>Proin tincidunt, orci vel volutpat blandit, purus turpis faucibus massa, sit amet posuere nunc diam in ex.<sup><i class="fa fa-quote-right"></i></sup></p>
                            <div class="test-img"> <img src="public/images/team-img-02.jpg" />
                                <p><strong>Brad Will</strong></p>
                            </div>
                        </div>
                        <div class="item">
                            <p><sup><i class="fa fa-quote-left"></i></sup>Morbi velit mauris, hendrerit in convallis vel, laoreet et orci. Integer semper, est vel congue suscipit, nisl nibh convallis lorem, sit amet faucibus purus lacus eu nulla. Sed nec blandit ante, sed semper tellus.<sup><i class="fa fa-quote-right"></i></sup></p>
                            <div class="test-img"> <img src="public/images/team-img-03.jpg" />
                                <p><strong>John Deo</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="call-to-action">
        <div class="call-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-10">
                        <div class="subscribe-text">
                            <h3>Se Cadastre Grátis!</h3>
                            <p>Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center"> <a href="cadastro" class="subscribe-button">Cadastro</a> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Sobre nós</h3>
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <p>Donec velit ex, faucibus eu mauris in, sodales placerat augue. Phasellus feugiat ex id enim laoreet mattis. Quisque velit quam, pharetra non lorem vel, scelerisque ornare dolor. Etiam id ex justo. Nullam nec ipsum non augue convallis gravida. Praesent mattis placerat sodales. Pellentesque nec egestas neque. </p>
                        <p>Donec velit ex, faucibus eu mauris in, sodales placerat augue. Phasellus feugiat ex id enim laoreet mattis. Quisque velit quam, pharetra non lorem vel, scelerisque ornare dolor. Etiam id ex justo. Nullam nec ipsum non augue convallis gravida. Praesent mattis placerat sodales. Pellentesque nec egestas neque. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-6 col-sm-6 col-xs-6 block">
                        <div class="counter-item text-center">
                            <h5>Usuários</h5>
                            <div class="timer" data-from="0" data-to="55" data-speed="5000" data-refresh-interval="50"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="counter-item text-center">
                            <h5>Profissionais</h5>
                            <div class="timer" data-from="0" data-to="88" data-speed="5000" data-refresh-interval="50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './app/view/routes/foot.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="public/js/jquery.min.js"></script>

    <!--<script src="public/js/bootstrap.min.js"></script>-->
   <!---<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--<script type="text/javascript" src="public/js/owl.carousel.min.js"></script>-->
    <!--<script type="text/javascript" src="public/js/jquery.countTo.js"></script>-->
    <!--<script type="text/javascript" src="public/js/jquery.waypoints.min.js"></script>-->
</body>

</html>