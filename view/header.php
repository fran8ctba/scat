<?php /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
para a index.php.*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location: http://localhost:88/scat/public/');
}
$logado = $_SESSION['login'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>CRUD com Bootstrap</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Bootstrap Core CSS -->
  <link href="<?php echo BASEURL; ?>view/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="<?php echo BASEURL; ?>view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo BASEURL; ?>view/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php echo BASEURL; ?>view/css/stylish-portfolio.css" rel="stylesheet">

</head>

<body>



  <style>
  span.fa.fa-chevron-down {
    float: right;
  }
  ul {
   list-style-type: none;
 }
</style>

<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
  <i class="fas fa-times"></i>
</a>
<nav id="sidebar-wrapper">
  <ul class="sidebar-nav">
    <li class="sidebar-brand">
      <a class="js-scroll-trigger" href="<?php echo BASEURL; ?>functions/deslogar.php"><i class="icon-logout" style="margin-right:1em;"></i>Sair</a>
    </li>

    <!-- home -->
    <li class="sidebar-nav-item" >
      <a class="btn btn-primary" style="text-align: left;" href="<?php echo BASEURL; ?>view"><i class="fa fa-home" style="margin-right:1em;"></i>Home</a>
    </li>

    <!-- Vans -->
    <li class="sidebar-nav-item" >
      <a class="btn btn-primary collapsed" style="text-align: left; " data-toggle="collapse" href="#vans" role="button" aria-expanded="false" aria-controls="vans"><i class="fa fa-bus" style="margin-right:1em;"></i>Vans<span class="fa fa-chevron-down" ></span></a>
    </li>
    <div class="collapse in " id="vans" style="">
      <ul class="sub-menu" id="vans">
       <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="<?php echo BASEURL; ?>view/van/cadastrar.php" >Cadastrar Vans</a></li>
       <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="<?php echo BASEURL; ?>view/van" >Listar Vans</a></li>
     </ul>
   </div>

   <!-- Alunos -->
   <li class="sidebar-nav-item" >
    <a class="btn btn-primary collapsed" style="text-align: left; " data-toggle="collapse" href="#alunos" role="button" aria-expanded="false" aria-controls="alunos"><i class="fa fa-child" style="margin-right:1em;"></i>Alunos<span class="fa fa-chevron-down" ></span></a>
  </li>
  <div class="collapse in " id="alunos" style="">
    <ul class="sub-menu">
     <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="<?php echo BASEURL; ?>view/aluno/cadastrar.php" >Cadastrar Aluno</a></li>
     <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="<?php echo BASEURL; ?>view/aluno" >Listar Alunos</a></li>
   </ul>
 </div>

 <!-- Usuarios -->
 <li class="sidebar-nav-item" >
  <a class="btn btn-primary collapsed" style="text-align: left; " data-toggle="collapse" href="#usuarios" role="button" aria-expanded="false" aria-controls="usuarios"><i class="fa fa-user" style="margin-right:1em;"></i>Usuários<span class="fa fa-chevron-down" ></span></a>
</li>
<div class="collapse in " id="usuarios" style="">
  <ul class="sub-menu">
   <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="<?php echo BASEURL; ?>view/usuario/cadastrar.php" >Cadastrar Usuário</a></li>
   <li class="sidebar-nav-item"><a class="js-scroll-trigger" href="<?php echo BASEURL; ?>view/usuario" >Listar Usuários</a></li>
 </ul>
</div>
</ul>
</nav>

