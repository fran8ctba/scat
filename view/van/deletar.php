<?php 
$aindex = 2;
require_once('../../functions/van.php');

if (isset($_GET['id'])){
	delete($_GET['id']);
} else {
	die("ERRO: ID não definido.");
}
?>
