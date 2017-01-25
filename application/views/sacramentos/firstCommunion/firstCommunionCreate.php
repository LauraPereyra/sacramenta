<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/validate.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url()?>assets/js/prototype-1.6.0.2.js"></script>-->

<section id = "content">
		<div class="section">
      <div class="row">
				<div class="col s12 m12 l12">

				<?php if($this->session->flashdata('error')) {?>
	          <div id="card-alert" class="card red">
	            <div class="card-content white-text">
	              <p><?php echo $this->session->flashdata('error') ?></p>
	            </div>
	            <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
	              <span aria-hidden="true">×</span>
	            </button>
	          </div>
	      <?php } ?>
				<?php if($this->session->flashdata('success')) {?>
	          <div id="card-alert" class="card green">
	            <div class="card-content white-text">
	              <p><?php echo $this->session->flashdata('success') ?></p>
	            </div>
	            <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
	              <span aria-hidden="true">×</span>
	            </button>
	          </div>
	      <?php } ?>
			</div>
            <div class="col s12 m12 l12">
              <nav class="amber darken-4">

                  <div class="nav-wrapper">
                    <div class="col s12">
                    <h1 class="brand-logo center">Primera Comunión</h1>
                    </div>
                  </div>
                </nav>
              <div class="card-panel">
                <div class="row">
                  <form class="col s12" id="formPriest" method="post" action="<?php echo base_url(); ?>firstCommunion/FirstCommunionRegister">
                    <div class="row">
                      <div class="input-field col s6">
                        <i class="mdi-action-credit-card prefix"></i>
                        <input placeholder="Ingrese su carnet de identidad" id="ci" name="ci" type="text"><div id="msgUsuario"></div>
                        <input id="ci_id" name="ci_id" type="hidden">
                        <label for="ci" class="active"><b>Carnet de Identidad</b></label>
												<span id="comprobar_mensaje"></span>
                      </div>
                      <div class="input-field col s6">
                        <i class="mdi-action-event prefix"></i>
                        <input placeholder="" id="fechanac" disabled  name="fechanac" type="date">
                        <label for="first_name" class="active"><b>Fecha Nacimiento</b></label>
                      </div>
                    </div>

                      <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input placeholder="Ingrese su nombre completo" id
                            <input placeholder="Ingrese su nombre completo" disabled id="nombre" name="nombre" type="text">
                            <label for="nombre" class="active"><b>Nombre</b></label>
                        </div>
                        <div class="input-field col s6">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input placeholder="Ingrese su nombre completo" disabled id="apellido" name="apellido" type="text">
                          <label for="apellido" class="active"><b>Apellido</b></label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s6">
                              <i class="mdi-action-event prefix"></i>
                              <input placeholder="" id="fechacom" name="fechacom" type="date">
                              <label for="first_name" class="active"><b>Fecha Primera Comunión</b></label>
                        </div>

                        <div class="input-field col s6">
                          <i class="mdi-action-home prefix"></i>
                          <input placeholder="Ingrese la parroquia" id="parroquia" name="parroquia" type="text">
                          <input id="parroquia_id" name="parroquia_id" type="hidden">
                          <label for="parroquia" class="active"><b>Parroquia</b></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s0">
                          <i class="mdi-maps-map prefix"></i>&nbsp &nbsp
                        </div>
                        <div class="input-field col s11">

                          <select id="lugarNacimiento" name="lugarNacimiento">
                            <option value="" disabled selected>Selecccion un lugar</option>
                            <option value="1">La Paz</option>
                            <option value="2">Cochabamba</option>
                            <option value="3">Santa Cruz</option>
                            <option value="4">Oruro</option>
                            <option value="5">Potosi</option>
                            <option value="6">Sucre</option>
                            <option value="7">Beni</option>
                            <option value="8">Pando</option>
                            <option value="9">Tarija</option>
                          </select>
                          <label><b>Lugar de Comunión</b> </label>
                        </div>

                    </div>
                  <!--  <h4 class="header2">Informacion de Registro</h4>--><br>
                    <div class="row">
                      <div class="input-field col s4">
                        <i class="mdi-action-book prefix"></i>
                        <input placeholder="Ingrese el libro" id="libroOne" name="libroOne" type="text">
                        <label for="libro" class="active"><b>Libro</b></label>
                      </div>
                      <div class="input-field col s4">
                        <i class="mdi-action-find-in-page prefix"></i>
                        <input placeholder="Ingrese el pagina" id="paginaOne" name="paginaOne" type="text">
                        <label for="pagina" class="active"><b>Página</b></label>
                      </div>
                      <div class="input-field col s4">
                        <i class="mdi-editor-format-list-numbered prefix"></i>
                        <input placeholder="Ingrese el numero" id="numeroOne" name="numeroOne" type="text">
                        <label for="numero" class="active"><b>Número</b></label>
                      </div>
                    </div><br>
                    <div class="row">
                    <!--  <h4 class="header2">Informacion de Familiares</h4>--><br>
                      <div class="input-field col s4 offset-s4">
                        <i class="mdi-action-credit-card prefix"></i>
                        <input placeholder="Ingrese el carnet de identidad" id="carnetPadrino" name="carnetPadrino" type="text">
                        <input placeholder="Ingrese el carnet de identidad" id="carnetPadrino_id" name="carnetPadrino_id" type="hidden">
                        <label for="carnetPadrino" class="active"><b>Carnet de Identidad del Padrino</b></label>
                      </div>
                    </div>
										<div class="row">
                      <div class="input-field col s4 offset-s4">
                        <i class="mdi-social-person prefix"></i>
                        <input placeholder="" id="nombrePadrino" name="nombrePadrino" type="text">
                        <label for="nombrePadrino" class="active"><b>Nombre del Padrino</b></label>
                      </div>
										</div>
                    <Br><BR>
                    <div class="row">
                        <div class="input-field col s7">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Registrar
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
		</div>
</section>
<!--<script type="text/javascript">
  function comprobar(ci)
  {
    //var url = 'http://'+location.host+'/ajax/ajax_comprobar_nick.php';
    var url = '<?php echo base_url(); ?>users/testare';
    var pars= ('ci=' + document.getElementById('ci').value);

    var myAjax = new Ajax.Updater( 'comprobar_mensaje', url, { method: 'get', parameters: pars});
  }
</script>-->
<script type="text/javascript">
$(document).ready(function(){

		$("#parroquia").autocomplete({
        source: "<?php echo base_url(); ?>jurisdiccion/autoCompleteParroquia",
        minLength: 1,
        select: function( event, ui ) {
           $("#parroquia_id").val(ui.item.id);
        }
      });
    $('#ci').autocomplete({
      source: "<?php echo base_url(); ?>users/autoCompleteCarnetCommunion",
      minLength: 5,
      select: function( event, ui ) {
         $("#ci_id").val(ui.item.ci);
         $("#nombre").val(ui.item.nombre);
         $("#apellido").val(ui.item.apellido);
         $("#fechanac").val(ui.item.fechanac);
      }
    });
    $("#carnetPadrino").autocomplete({
				source: "<?php echo base_url(); ?>users/autoCompleteCarnetPadrino",
				minLength: 1,
				select: function (event, ui) {
						$("#carnetPadrino_id").val(ui.item.id);
             $("#nombrePadrino").val(ui.item.nombre);
				}
		});

});
</script>
