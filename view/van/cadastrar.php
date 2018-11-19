
<?php 
require_once('../../functions/van.php');
add();
?>
<?php include(HEADER_TEMPLATE); ?>

<script type="text/javascript">
  var dayGroup = new CheckBoxGroup();
  dayGroup.addToGroup("day");
  dayGroup.setControlBox("alldays");
  dayGroup.setMasterBehavior("all");
</script>

<main style="background-color:#00bcd4!important;height: 100%" >
  <form action="cadastrar.php" method="post">
    <div align="center">
      <div class="register">
        <div class="row" style="width: 80%;">
          <div class="col-md-3 register-left cad-van" style="text-align: center; margin-top: 10em">
            <i class="fas fa-user" style=" font-size: 7em;"></i>
            <h3>Cadastro de usuário</h3>
            <p>Insira os dados dos usuário aqui!</p>
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
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dados do usuário</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3 class="register-heading" style="margin: 1.5em 0">Todos os campos são obrigarórios</h3>
                <div class="row register-form">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" required="required" placeholder="Login *" name="van['login']" />
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" required="required" placeholder="Senha *" name="van['senha']" />
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" required="required" placeholder="Nome *" name="van['nome']" />
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" required="required" placeholder="CPF *" name="van['cpf']" />
                    </div>
                    
                    
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="date" class="form-control" required="required" placeholder="Data de Nascimento *" name="van['dt_nascimento']" />
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" required="required" placeholder="Telefone *" name="van['telefone']" />
                    </div>
                    <div class="form-group">
                      <div class="maxl" style="text-align: left; float: left;">
                        <div style="width: 100%">Tipo de Usuário:</div>

                        <div class="custom-control custom-radio" style="width: 45%; float: left; margin-right: 10%;">
                          <input type="radio" class="custom-control-input" id="defaultUnchecked" name="van['tipo_user']" value="1" onclick="show1();">
                          <label class="custom-control-label" for="defaultUnchecked">Auxiliar</label>
                        </div>

                        <div class="custom-control custom-radio" style="width: 45%; float: left; ">
                          <input type="radio" class="custom-control-input" id="defaultChecked" name="van['tipo_user']" value="2"   onclick="show2();">
                          <label class="custom-control-label" for="defaultChecked">Motorista</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group" id="motorista" style="display: none;">
                      <input type="number" class="form-control" placeholder="Nº Carteira *" name="van['n_carteira']" />
                    </div>
                    <div class="form-group" id="auxiliar" style="display: none;">
                      <input type="text" class="form-control" placeholder="Obs. *" name="van['obs']" />
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