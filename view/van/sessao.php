<?php 
require_once('../../functions/usuario.php');
$login = $_POST['login'];
$senha = $_POST['senha'];

altenticar($login , $senha);

if ($result) : 
// session_start inicia a sessão
	session_start();
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:../');
else :
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location:index.php');
endif; 


