<?php

require_once('../../db/comand_db.php');
require_once('../../config.php');
require_once(DBAPI);

$alunos = null;
$aluno = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $alunos;
	$alunos = find_all('alunos');
}

/**
 *  Cadastro de Clientes
 */
function add() {

  if (!empty($_POST['aluno'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $aluno = $_POST['aluno'];
    
    save('alunos', $aluno);
    header('location: index.php');
  }
}

/**
 *  Atualizacao/Edicao de Cliente
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['aluno'])) {
      $aluno = $_POST['aluno'];
      
      update('alunos', $id, $aluno);
      header('location: index.php');
    } else {

      global $aluno;
      $aluno = find('alunos', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $aluno;
  $aluno = find('alunos', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $aluno;
  $aluno = remove('alunos', $id);

  header('location: index.php');
}


function altenticar($login = null, $senha = null ) {
  global $result;
  $result = finduser($login, $senha);
}

