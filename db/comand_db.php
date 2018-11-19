<?php

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find( $table = null, $id = null ) {
	
	$database = open_database();
	$found = null;

	try {
		if ($id) {
			$sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
			$result = $database->query($sql);
			
			if ($result->num_rows > 0) {
				$found = $result->fetch_assoc();
			}
			
		} else {
			
			$sql = "SELECT * FROM " . $table;
			$result = $database->query($sql);
			
			if ($result->num_rows > 0) {
				$found = $result->fetch_all(MYSQLI_ASSOC);
				
        /* Metodo alternativo
        $found = array();

        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
      }
    }
  } catch (Exception $e) {
   $_SESSION['message'] = $e->GetMessage();
   $_SESSION['type'] = 'danger';
 }

 close_database($database);
 return $found;
}

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all( $table ) {
	return find($table);
}

/**
 *  Pesquisa um registro pelo login e senha
 */
function finduser( $login = null, $senha = null ) {

  $database = open_database();
  $found = null;

  $senha = md5($senha);
  try {
    if ($login) {
      $sql = "SELECT * FROM `usuarios` WHERE login = '$login' and senha = '$senha'";
        
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $found = $result->fetch_assoc();
      }
      
    }
  } catch (Exception $e) {
   $_SESSION['message'] = $e->GetMessage();
   $_SESSION['type'] = 'danger';
 }

 close_database($database);
 return $found;
}


/**
*  Insere um registro no BD
*/
function save($table = null, $data = null) {

  $database = open_database();

  $columns = null;
  $values = null;

  //print_r($data);

  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }

  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';

  } catch (Exception $e) { 

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  close_database($database);
}

/**
 *  Atualiza um registro em uma tabela, por ID
 */
function update($table = null, $id = 0, $data = null) {

  $database = open_database();

  $items = null;

  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }

  // remove a ultima virgula
  $items = rtrim($items, ',');

  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE id=" . $id . ";";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';

  } catch (Exception $e) { 

    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 

  close_database($database);
}


/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove( $table = null, $id = null ) {

  $database = open_database();

  try {
    if ($id) {

      $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
      $result = $database->query($sql);

      if ($result = $database->query($sql)) {   	
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) { 

    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }

  close_database($database);
}



/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find_campo($campo = null, $table = nome, $id = null ) {
  
  $database = open_database();
  $found = null;

  try {
    if ($id) {
      $sql = "SELECT " . $campo . " FROM ".$table." WHERE id = " . $id;
      $result = $database->query($sql);
      
      if ($result->num_rows > 0) {
        $found = $result->fetch_assoc();
      }      
    }
  } catch (Exception $e) {
   $_SESSION['message'] = $e->GetMessage();
   $_SESSION['type'] = 'danger';
 }

 close_database($database);
 return $found;
}