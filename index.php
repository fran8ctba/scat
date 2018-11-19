<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>SCAT</title>

  <!-- Bootstrap Core CSS -->
  <link href="view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="view/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="view/css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="login">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#login">Entrar no sistema</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#servicos">Serviços</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="#sociais">Redes Sociais</a>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
     <div class="modal-dialog modal-login">
      <div class="modal-content">
        <style>
        .modal-content {
          position: relative;
          display: -ms-flexbox;
          display: flex;
          -ms-flex-direction: column;
          flex-direction: column;
          width: 100%;
          pointer-events: auto;
          background-color: rgba(0,0,0,.2);
          background-clip: padding-box;
          border: 1px solid rgba(0,0,0,.2);
          border-radius: .3rem;
          outline: 0;
        }
        .modal-login {
          color: #636363;
          width: 350px;
        }
        .modal-login .modal-content {
          padding: 20px;
          border-radius: 5px;
          border: none;
        }
        .modal-login .modal-header {
          border-bottom: none;
          position: relative;
          justify-content: center;
        }
        .modal-login h4 {
          text-align: center;
          font-size: 26px;
        }
        .modal-login  .form-group {
          position: relative;
        }
        .modal-login i {
          position: absolute;
          left: 13px;
          top: 11px;
          font-size: 18px;
        }
        .modal-login .form-control {
          padding-left: 40px;
        }
        .modal-login .form-control:focus {
          border-color: #00ce81;
        }
        .modal-login .form-control, .modal-login .btn {
          min-height: 40px;
          border-radius: 3px; 
        }
        .modal-login .hint-text {
          text-align: center;
          padding-top: 10px;
        }
        .modal-login .close {
          position: absolute;
          top: -5px;
          right: -5px;
        }
        .modal-login .btn {
          background: #00ce81;
          border: none;
          line-height: normal;
        }
        .modal-login .btn:hover, .modal-login .btn:focus {
          background: #00bf78;
        }
        .modal-login .modal-footer {
          background: #ecf0f1;
          border-color: #dee4e7;
          text-align: center;
          margin: 0 -20px -20px;
          border-radius: 5px;
          font-size: 13px;
          justify-content: center;
        }
        .modal-login .modal-footer a {
          color: #999;
        }
        .trigger-btn {
          display: inline-block;
          margin: 100px auto;
        }
        .modal-logo{
          width: 36%;
        }
        @media(max-width: 480px){
          .modal-dialog {
            max-width: 300px;
            margin: 1.75rem auto;
          }
        }
        @media (min-width: 576px){
          .modal-dialog {
            max-width: 500px;
            margin: 5.75rem auto;
          }
        }
      </style>
      <div class="modal-header">        
        <img class="modal-logo" src="view/img/LOGOSCAT.png" >
      </div>
      <div class="modal-body">
        <form method="post" action="view/usuario/sessao.php">
          <div class="form-group">
            <i class="fa fa-user"></i>
            <input type="text" class="form-control" placeholder="Nome" required="required" name="login">
          </div>  
          <div class="form-group">
            <i class="fa fa-lock"></i>
            <input type="password" class="form-control" placeholder="Senha" required="required" name="senha">         
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login" name="entrar">
          </div>
        </form>                 
      </div>
      <div class="modal-footer">
        <a href="#">Esqueceu a senha?</a>
      </div>
    </div>
  </div>
</div>
<div class="overlay"></div>
</header>

<!-- Services -->
<section class="content-section bg-primary text-white text-center" id="servicos">
  <div class="container">
    <div class="content-section-heading">
      <h3 class="text-secondary mb-0">Serviços</h3>
      <h2 class="mb-5">O que nós <br>oferecemos</h2>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-user"></i>
        </span>
        <h4>
          <strong>Painel Administrativo</strong>
        </h4>
        <p class="text-faded mb-0">Em uma interface simples: adicione os alunos, motoristas, auxiliares e vans!</p>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-printer"></i>
        </span>
        <h4>
          <strong>Impressão de relátorios</strong>
        </h4>
        <p class="text-faded mb-0">Tenha acesso aos dados mais importantes diretamente de seu navegador web!</p>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-map"></i>
        </span>
        <h4>
          <strong>Insira suas rotas</strong>
        </h4>
        <p class="text-faded mb-0">
        Não se perca tenha sempre os endereços e sequencia das suas rotas!</p>
      </div>
      <div class="col-lg-3 col-md-6">
        <span class="service-icon rounded-circle mx-auto mb-3">
          <i class="icon-graduation"></i>
        </span>
        <h4>
          <strong>Area do aluno</strong>
        </h4>
        <p class="text-faded mb-0">Mais controle para os pais, acesso aos dados e faltas dos alunos </p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer id="sociais" class="footer text-center">
  <div class="container">
    <ul class="list-inline mb-5">
      <li class="list-inline-item">
        <a class="social-link rounded-circle text-white mr-3" href="#">
          <i class="icon-social-facebook"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="social-link rounded-circle text-white mr-3" href="#">
          <i class="icon-social-twitter"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="social-link rounded-circle text-white" href="#">
          <i class="icon-social-github"></i>
        </a>
      </li>
    </ul>
    <p class="text-muted small mb-0">Feito com muito ♥ por Helena e Fran!</p>
  </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript -->
<script src="view/vendor/jquery/jquery.min.js"></script>
<script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="view/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="view/js/stylish-portfolio.min.js"></script>

</body>

</html>
