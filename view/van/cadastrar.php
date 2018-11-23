<?php 
$aindex = 2;
require_once('../../functions/van.php');
add();
?>
<?php include(HEADER_TEMPLATE); ?>
<!-- auxiliar 1
 motorista 2  -->
 <script type="text/javascript">
  var dayGroup = new CheckBoxGroup();
  dayGroup.addToGroup("day");
  dayGroup.setControlBox("alldays");
  dayGroup.setMasterBehavior("all");
</script>

<main style="background-color:#fff!important;height: 100%" >
  <form action="cadastrar.php" method="post">
    <div align="center">
      <div class="register">
        <div class="row" style="width: 80%;">
          <div class="col-md-3 register-left cad-van" style="text-align: center; margin-top: 10em">
            <i class="fas fa-bus" style=" font-size: 7em;"></i>
            <h3>Cadastro de vans</h3>
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
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dados da Van</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3 class="register-heading" style="margin: 1.5em 0">Todos os campos são obrigarórios</h3>
                <div class="row register-form">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" required="required" placeholder="Placa *" name="van['placa']" />
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" required="required" placeholder="Chassi *" name="van['chassi']" />
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" required="required" placeholder="nº Bancos *" name="van['n_bancos']" />
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                     <select class="form-control" required="required" name="aluno['id_auxiliar']" >
                      <option class="hidden" selected disabled>Selecione Auxiliar </option>
                      <!-- loop auxiliares -->
                      <?php if ($auxiliares) : ?>
                        <?php foreach ($auxiliares as $auxiliar) : ?>
                          <option value="<?php echo $auxiliar["id"]; ?>"><?php echo $auxiliar["nome"]; ?></option>
                        <?php endforeach; ?>
                        <?php else : ?>
                          <option value="0">Nenhum Auxiliar encontrado</option>                          
                        <?php endif; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control" required="required" name="aluno['id_motorista']" >
                        <option class="hidden" selected disabled>Selecione Motorista </option>
                        <!-- loop auxiliares -->
                        <?php if ($motoristas) : ?>
                          <?php foreach ($motoristas as $motorista) : ?>
                            <option value="<?php echo $motorista["id"]; ?>"><?php echo $motorista["nome"]; ?></option>
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