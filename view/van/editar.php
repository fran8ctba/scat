<?php 
$aindex = 2;
require_once('../../functions/van.php');
edit();
?>

<!--  -->

<?php include(HEADER_TEMPLATE); ?>

<main style="background-color:#fff!important;height: 100%" >
  <form action="editar.php?id=<?php echo $van['id']; ?>" method="post">
    <div align="center">
      <div class="register">
        <div class="row" style="width: 80%;">
          <div class="col-md-3 register-left cad-van" style="text-align: center; margin-top: 10em">
            <i class="fas fa-user" style=" font-size: 7em;"></i>
            <h3>Editar van <?php echo $van['placa']; ?></h3>
            <p>Insira os dados da van aqui!</p>
            <div id="actions" class="row">
              <div class="col-md-12"> 
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
              </div>
            </div>
          </div>
          <div class="col-md-9 register-right" style="margin-top: 5em">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dados da van</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3 class="register-heading" style="margin: 1.5em 0">Todos os campos são obrigarórios</h3>
                <div class="row register-form">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" required="required" placeholder="Placa *" value="<?php echo $van['placa']; ?> " name="van['placa']" />
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" required="required" placeholder="Chassi *" value="<?php echo $van['chassi']; ?> " name="van['chassi']" />
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" required="required" placeholder="nº Bancos *" value="<?php echo $van['n_bancos']; ?> " name="van['n_bancos']" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                     <select class="form-control" required="required" name="van['id_auxiliar']" >
                      <option class="hidden" disabled>Selecione Auxiliar </option>
                      <!-- loop auxiliares -->
                      <?php if ($auxiliares) : ?>
                        <?php $i = 0;?>
                        <?php foreach ($auxiliares as $auxiliar) : ?>

                          <option value="<?php echo $auxiliar["id"]; ?>" 
                            <?php 
                            if( $auxiliar["id"] == $i ){
                              echo 'selected';
                            } else{
                              $i = $i+1;
                            }
                            ?> ><?php echo $auxiliar["nome"]; ?></option>

                          <?php endforeach; ?>
                          <?php else : ?>
                            <option value="0">Nenhum Auxiliar encontrado</option>                          
                          <?php endif; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" required="required" name="van['id_motorista']" >
                          <option class="hidden" disabled>Selecione Motorista </option>
                          <!-- loop auxiliares -->
                          <?php if ($motoristas) : ?>
                            <?php $i = 0;?>
                            <?php foreach ($motoristas as $motorista) : ?>
                              <option value="<?php echo $motorista["id"]; ?>"     
                                <?php 
                               if( $motorista["id"] == $i ){
                                echo 'selected';
                              } else{
                                $i = $i+1;
                              }?>
                              ><?php echo $motorista["nome"]; ?></option>
                            <?php endforeach; ?>
                            <?php else : ?>
                              <option value="0">Nenhum Motorista encontrado</option>                          
                            <?php endif; ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </form>

      <?php include(FOOTER_TEMPLATE); ?>