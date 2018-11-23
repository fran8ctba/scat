<?php
if($aindex == 1){
require_once('../db/comand_db.php');
require_once('../config.php');
}else{
require_once('../../db/comand_db.php');
require_once('../../config.php');
}
require_once(DBAPI);

$vans = null;
$van = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $vans;
	$vans = find_all('vans');
}

/**
 *  Cadastro de Clientes
 */
function add() {
 
  global $auxiliares;
  $auxiliares = find_aux_moto(1);


  global $motoristas;
  $motoristas = find_aux_moto(2);

  if (!empty($_POST['van'])) {

    $today = 
    date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $van = $_POST['van'];

    save('vans', $van);
    header('location: index.php');
  }
}

/**
 *  Atualizacao/Edicao de Cliente
 */
function edit() {


 global $auxiliares;
  $auxiliares = find_aux_moto(1);


  global $motoristas;
  $motoristas = find_aux_moto(2);

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['van'])) {

      $van = $_POST['van'];

      update('vans', $id, $van);
      header('location: index.php');
    } else {

      global $van;
      $van = find('vans', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $van;
  $van = find('vans', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $van;
  $van = remove('vans', $id);

  header('location: index.php');
}


function altenticar($login = null, $senha = null ) {
  global $result;
  $result = finduser($login, $senha);
}

function nome($id = null) {
  global $result;
  $result = find('usuarios',$id);
}


function enc(){
  global $motoristas;
  $motoristas = find('usuarios','2');

  global $auxiliares;
  $auxiliares = find('usuarios','1'); 
}