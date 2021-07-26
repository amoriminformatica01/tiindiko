<?php
header('Access-Control-Allow-Origin: *');
session_start();
ob_start();

spl_autoload_register(function($classe) {
  require_once "../classes/". $classe.".class.php";
});

include_once "../classes/config.php";
date_default_timezone_set('America/Sao_Paulo');
BD::conn();
$login = new Login('tiindiko_', 'users_pro');



//USUARIO LOGADO
$emailUserOn = $_SESSION['tiindiko_emailLog'];
$senhaUserOn = $_SESSION['tiindiko_senhaLog'];
$getUserOn = BD::conn()->prepare("SELECT * FROM users_pro WHERE email = '$emailUserOn' AND senha = '$senhaUserOn'");
$getUserOn->execute();
$showUserOn = $getUserOn->fetchObject();

if($getUserOn->rowCount() > 0) {
  $openModal = 'openModal(val);';
} else {
  $openModal = 'notOpenModal();';
}



$username = explode('/',$_SERVER["REQUEST_URI"])[2];

if(explode('/',$_SERVER["REQUEST_URI"])[2] == ''){
  echo '<script>window.location = "'.PATH.'"</script>';
}else{
  $checkUser = BD::conn()->prepare("SELECT * FROM users_pro WHERE username='$username' ");
  $checkUser->execute();
  if($checkUser->rowCount() == 0){

  echo "<script>window.location = '".PATH."'</script>";

}else{
  $showUser = $checkUser->fetchObject();


  //contador visitas
  $visitasAtual = $showUser->visitas;
  $newVisitas = $visitasAtual + '1';

  $updateVisitas = BD::conn()->prepare("UPDATE users_pro SET visitas = '$newVisitas' WHERE email = '$showUser->email'");
  $updateVisitas->execute();

}
}

 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
   <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Tiindiko - <?php echo $showUser->nome ?> (@<?php echo $showUser->username ?>)</title>
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
     <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
     <link href="css/main.css?ver=1.1.0" rel="stylesheet">
     <noscript>
       <style type="text/css">
         [data-aos] {
             opacity: 1 !important;
             transform: translate(0) scale(1) !important;
         }
       </style>
     </noscript>
   </head>
   <body id="top">
     <?php if($showUser->tel != ''){ ?>
       <a href="#" style="right:10px; bottom:10px; position:fixed; z-index:100000000000000;"><img src="images/wpp.png" width="60" ></a>

     <?php } ?>

     <header>
       <div class="profile-page sidebar-collapse">
         <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
           <div class="container">
              <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip"><img src='../imgs/logo_white.png' width='100'></a>
               <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
             </div>
             <div class="collapse navbar-collapse justify-content-end" id="navigation">
               <ul class="navbar-nav">
                 <li class="nav-item"><a class="nav-link smooth-scroll" href="#">Voltar</a></li>
                 <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">Sobre</a></li>
                 <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Habilidades</a></li>
                 <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Reviews</a></li>
                 <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                 <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experiências</a></li>

               </ul>
             </div>
           </div>
         </nav>
       </div>
     </header>
     <div class="page-content">
       <div>
 <div class="profile-page">
   <div class="wrapper">
     <div class="page-header page-header-small" filter-color="green">

       <div class="page-header-image" data-parallax="true" style="background-image: url('bg/<?php echo $showUser->foto_bg ?>')"></div>
       <div class="container">
         <div class="content-center">
           <div class="cc-profile-image"><a href="#"><img src="profile/<?php echo $showUser->foto_perfil ?>" alt="Image"/></a></div>
           <div class="h2 title"><?php echo $showUser->nome; ?></div>
           <p class="category text-white"><?php echo $showUser->skills; ?></p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Fale Comigo</a><a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
         </div>
       </div>
       <div class="section">
         <div class="container">
           <div class="button-container">
             <?php if($showUser->facebook != ''){ ?>
               <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $showUser->facebook; ?>" rel="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>

             <?php } ?>

             <?php if($showUser->twitter != ''){ ?>
               <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $showUser->twitter; ?>" rel="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                <?php } ?>

                <?php if($showUser->google != ''){ ?>
                  <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $showUser->google; ?>" rel="tooltip" title="Google"><i class="fa fa-google-plus"></i></a>

                   <?php } ?>

                   <?php if($showUser->instagram != ''){ ?>
                     <a class="btn btn-default btn-round btn-lg btn-icon" href="<?php echo $showUser->instagram; ?>" rel="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a>

                      <?php } ?>

           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="section" id="about">
   <div class="container">
     <div class="card" data-aos="fade-up" data-aos-offset="10">
       <div class="row">
         <div class="col-lg-6 col-md-12">
           <div class="card-body">
             <div class="h4 mt-0 title">Sobre</div>
             <p style="font-weight: 600;">Gostaria de avaliar o <?php echo $showUser->nome ?>?</p>



<style>
.vote label {
    cursor:pointer;
}
.vote label input{
    display:none;
}
.vote label i {
    font-family:FontAwesome;
    font-size:18px;
    -webkit-transition-property:color, text;
    -webkit-transition-duration: .2s, .2s;
    -webkit-transition-timing-function: linear, ease-in;
    -moz-transition-property:color, text;
    -moz-transition-duration:.2s;
    -moz-transition-timing-function: linear, ease-in;
    -o-transition-property:color, text;
    -o-transition-duration:.2s;
    -o-transition-timing-function: linear, ease-in;
}
.vote label i:before {
    content:'\f005';
}
.vote label i.active {
    color:gold;
}
#modal {
  display: none; 
  position: fixed;
  z-index: 999999999999999999999999;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  padding-top: 200px;
  width: 100%; 
  height: 100%; 
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
}
.modal-content {
  background-color: #fefefe;
  margin: 10px auto;
  padding: 20px;
  border: 1px solid #888;
  width: auto;
  max-width: 650px;
}
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.close:hover {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

<?php 
   $getAvaliacoes = BD::conn()->prepare("SELECT * FROM avaliacoes WHERE id_user = '$showUser->id'");
   $getAvaliacoes->execute();
   
   $soma = 0;
   while($showAvaliacoes = $getAvaliacoes->fetchObject()) {
     $soma = $soma + $showAvaliacoes->rate;
   }

   $qtd_rate = $soma/$getAvaliacoes->rowCount();
?>

<div class="vote">
<label>
<input type="radio" name="fb" value="1"/>
<i class="fa <?php if($qtd_rate >= '1') { echo 'active'; } ?>"></i>
</label>
<label>
<input type="radio" name="fb" value="2" />
<i class="fa <?php if($qtd_rate >= '2') { echo 'active'; } ?>"></i>
</label>
<label>
<input type="radio" name="fb" value="3" />
<i class="fa <?php if($qtd_rate >= '3') { echo 'active'; } ?>"></i>
</label>
<label>
<input type="radio" name="fb" value="4" />
<i class="fa <?php if($qtd_rate >= '4') { echo 'active'; } ?>"></i>
</label>
<label>
<input type="radio" name="fb" value="5" />
<i class="fa <?php if($qtd_rate >= '5') { echo 'active'; } ?>"></i>
</label>
</div>

<div id="guarda_rate"></div>

<script>
$('.vote label i.fa').on('click mouseover',function() {

    $('.vote label i.fa').removeClass('active');
    var val = $(this).prev('input').val();
    $('.vote label i.fa').each(function(){

        var $input = $(this).prev('input');
        if($input.val() <= val){
            $(this).addClass('active');      
        }
    });
  
});


$('.vote label i.fa').on('click',function() {

$('.vote label i.fa').removeClass('active');
var val = $(this).prev('input').val();
$('.vote label i.fa').each(function(){

    var $input = $(this).prev('input');
    if($input.val() <= val){
        $(this).addClass('active');      
    }
});
    <?php echo $openModal; ?>
});


function salvarRate() {
  var nome = '<?php echo $showUserOn->nome ?>';
  var comment = $('#comment_avaliacao').val();
  
  if(comment.length <= 3) {
     $('#result_rate').html('Escreva um comentário para a sua avaliação');
  } else {

    var rate = $('#guarda_rate').val();

    var parametros = {
      "id" : '<?php echo $showUser->id ?>',
      "rate" : rate,
      "nome" : nome,
      "comment" : comment
    };
    $.ajax({
      data:  parametros,
      url:   'https://tiindiko.com.br/u/php/salvar_rate.php',
      type:  'post',
      success: function(r) {
        $('#result_rate').html(r);
        $('#comment_avaliacao').val('');
        closeModal();
      }
    });
  }
}

function openModal(val) {
   $('#modal').show();
   $("html,body").css({"overflow":"hidden"});
   $('#guarda_rate').val(val);
}
function closeModal() {
   $('#modal').hide();
   $("html,body").css({"overflow":"auto"});
}
function notOpenModal() {
   alert('Você precisa estar logado para fazer uma avaliação');
   window.location.replace('https://tiindiko.com.br/login/');
}
</script>


             <p><?php echo $showUser->descricao; ?></p>
               </div>
         </div>
         <div class="col-lg-6 col-md-12">
           <div class="card-body">
             <div class="h4 mt-0 title">Informações</div>
             <div class="row">
               <div class="col-sm-4"><strong class="text-uppercase">Idade:</strong></div>
               <div class="col-sm-8">24</div>
             </div>
             <div class="row mt-3">
               <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
               <div class="col-sm-8"><?php echo $showUser->email; ?></div>
             </div>
             <div class="row mt-3">
               <div class="col-sm-4"><strong class="text-uppercase">WhatsApp:</strong></div>
               <div class="col-sm-8"><?php echo $showUser->tel; ?></div>
             </div>
             <div class="row mt-3">
               <div class="col-sm-4"><strong class="text-uppercase">Cidade:</strong></div>
               <div class="col-sm-8"><?php echo $showUser->endereco; ?></div>
             </div>

           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="section" id="skill">
   <div class="container">
     <div class="h4 text-center mb-4 title">Especialidades</div>
     <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
       <div class="card-body"style="text-align:center;">
         <div class="row" style="text-align:center;">
           <div class="card-body">
           <?php $hab = explode(',',$showUser->skills); ?>
           <?php foreach ($hab as $key => $value): ?>
             <a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor"><?php echo $value; ?></a>

           <?php endforeach; ?>
         </div>
         </div>

       </div>
     </div>
   </div>
 </div>
 <div class="section" id="reference">
   <div class="container cc-reference">
     <div class="h4 mb-4 text-center title">Depoimentos</div>
     <div class="card" data-aos="zoom-in">
       <div class="carousel slide" id="cc-Indicators" data-ride="carousel">
         <ol class="carousel-indicators">
           <li class="active" data-target="#cc-Indicators" data-slide-to="0"></li>
           <li data-target="#cc-Indicators" data-slide-to="1"></li>
           <li data-target="#cc-Indicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
           <div class="carousel-item active">
             <div class="row">
               <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-1.jpg" alt="Image"/>
                 <div class="h5 pt-2">Aiyana</div>
                 <p class="category">CEO / WEBM</p>
               </div>
               <div class="col-lg-10 col-md-9">

                 <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
               </div>
             </div>
           </div>


         </div>
       </div>
     </div>
   </div>
 </div>

 <div class="section" id="portfolio">
   <div class="container">
     <div class="row">
       <div class="col-md-6 ml-auto mr-auto">
         <div class="h4 text-center mb-4 title">Portfolio</div>

       </div>
     </div>
     <div class="tab-content gallery mt-5">
       <div class="tab-pane active" id="web-development">
         <div class="ml-auto mr-auto">
           <div class="row">
             <div class="col-md-12">
             <?php

             $getPort = BD::conn()->prepare("SELECT * FROM portfolio WHERE id_user='$showUser->id' LIMIT 4 ");
             $getPort->execute();

             while($showPort = $getPort->fetchObject()){ ?>

               <div class="col-md-6" style="float:left;">
               <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                   <figure class="cc-effect"><img src="portfolio/<?php echo $showPort->img; ?>" alt="Image"/>
                     <figcaption>
                       <div class="h4"><?php echo $showPort->titulo; ?></div>
                       <p><?php echo $showPort->descricao; ?></p>
                     </figcaption>
                   </figure></a>
                 </div>
               </div>

           <?php  }  ?>
           </div>

           </div>
         </div>
       </div>

     </div>
   </div>
 </div>
 <div class="section" id="experience">
   <div class="container cc-experience">
     <div class="h4 text-center mb-4 title">Experiências</div>
     <?php

     $getExp = BD::conn()->prepare("SELECT * FROM experiencia WHERE id_user='$showUser->id'  LIMIT 4 ");
     $getExp->execute();
     while($showExp = $getExp->fetchObject()){ ?>
       <div class="card">
         <div class="row">

           <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
             <div class="card-body cc-experience-header">
               <p><?php echo $showExp->data_inicio ?> - <?php echo $showExp->data_fim ?></p>
               <div class="h5"><?php echo $showExp->empresa ?></div>
             </div>
           </div>
           <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
             <div class="card-body">
               <div class="h5"><?php echo $showExp->cargo ?></div>
               <p><?php echo $showExp->descricao ?></p></div>
           </div>
         </div>
       </div>
     <?php }
         ?>


   </div>
 </div>

 <div id="modal">
    <div class="modal-content">
      <span class="close" onClick="closeModal();">&times;</span>
      <p><b>Deixe um comentário para avaliar os serviços de <?php echo $showUser->nome; ?></b></p>
      <textarea id="comment_avaliacao" style="border: 1px solid lightgrey; border-radius: 5px; padding-left: 5px" rows="4" placeholder="Deixe um comentário para a sua avaliação"></textarea> <br>

      <div id="result_rate"></div>

      <button type="button" style="width: 100%;" class="btn btn-primary smooth-scroll mr-2" style="float: right;" onClick="salvarRate();">Avaliar</button>
    </div>
</div> 

     </div>


   


     <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
     <script src="js/core/popper.min.js?ver=1.1.0"></script>
     <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
     <script src="js/now-ui-kit.js?ver=1.1.0"></script>
     <script src="js/aos.js?ver=1.1.0"></script>
     <script src="scripts/main.js?ver=1.1.0"></script>

   </body>
 </html>
