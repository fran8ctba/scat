<?php
require_once('../../db/comand_db.php');
require_once('../../config.php');
require_once(DBAPI);

$rotas = null;
$rota = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $rotas;
	//$rotas = find_all('');
}

/**
 *  Cadastro de Clientes
 */
function add() {
 
  global $auxiliares;
  $auxiliares = find_aux_moto(1);


  global $motoristas;
  $motoristas = find_aux_moto(2);

  if (!empty($_POST['rota'])) {

    $today = 
    date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $rota = $_POST['rota'];

    save('rotas', $rota);
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

    if (isset($_POST['rota'])) {

      $rota = $_POST['rota'];

      update('rotas', $id, $rota);
      header('location: index.php');
    } else {

      global $rota;
      $rota = find('rotas', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $rota;
  $rota = find('rotas', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $rota;
  $rota = remove('rotas', $id);

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