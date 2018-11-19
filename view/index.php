<?php 
require_once('../functions/van.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>

<main style="background-color:#fff!important;height: 100%" >
  <main class="container">
    <header class="header">
      <h1>Bem-vindo <?php echo $_SESSION['login']; ?></h1>
      <br>
      <h4>Você tem acesso as vans</h4>
    </header>
    <hr>


    <div class="row justify-content-md-left">

      <!-- loop vans -->
      <?php if ($vans) : ?>
        <?php foreach ($vans as $van) : ?>
          <div class="col-md-4" style="float: left; margin-bottom: 1em ;">
            <a href="visualizar.php?id=<?php echo $van['id']; ?>" class="btn btn-outline-warning col text-center" >
              <div class="row" >
                <i class="fa fa-bus fa-5x" style="margin-left:6px"></i>
                <ul style="text-align: left;">
                  <li style="text-align: center; font-size: 20px"><?php echo $van['placa']; ?></li>
                  <li>Motorista: <?php 
                   nome($van['id_motorista']); 
                   echo $result['login']; 
                  ?></li>
                  <li>Tia: <?php 
                   nome($van['id_auxiliar']); 
                   echo $result['login']; 
                  ?></li>
                  <li>n° bancos ocu.: <?php echo $van['n_bancos_ocupados']; ?></li>                
                </ul>
              </div>
            </a>
          </div>

        <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
          </tr>
        <?php endif; ?>
      </div>
    </main>
    <?php include(FOOTER_TEMPLATE); ?>