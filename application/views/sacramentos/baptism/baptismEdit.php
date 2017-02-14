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
                    <h1 class="brand-logo center">Bautizo</h1>
                    </div>
                  </div>
               </nav>
              <div class="card-panel">
                <div class="row">
                  <form class="col s12" id="formPriest" method="post" action="<?php echo base_url(); ?>baptism/update" method="POST" enctype="multipart/form-data">
                  	<font color="black" size="5" face="Lucida Calligraphy">Datos Generales</font><br><Br>
                      <div class="row">
						<div class="input-field col s12">
							<i class="mdi-action-account-circle prefix"></i>
							<input id="feligres" name="feligres" type="text" value="<?php echo $feligres ?>">
							<input id="feligres_id" name="feligres_id" type="hidden" value="<?php echo $persona_id ?>">
							<label for="apellidoPaterno" class="active"><b>Feligrés (*)</b></label>
						</div>

                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <i class="mdi-action-home prefix"></i>
                        <input id="parroquia" name="parroquia" type="text" value="<?php echo $parroquia ?>">
                        <input id="parroquia_id" name="parroquia_id" type="hidden" value="<?php echo $parroquia_id ?>">
                        <label for="parroquia" class="active"><b>Parroquia que inscribe el sacramento (*)</b></label>
                      </div>
						<div class="input-field col s6">
							<i class="mdi-action-event prefix"></i>
							<input id="fecha" name="fecha" type="date" value="<?php echo $fecha ?>">
							<label for="fechabautismo" class="active"><b>Fecha de Celebración (*)</b></label>
						</div>                      
                    </div>

                    <div class="row">
						<div class="input-field col s12">
							<i class="mdi-action-room prefix"></i>
							<input id="jurisdiccion" name="jurisdiccion" type="text" value="<?php echo $jurisdiccion ?>">
							<input id="jurisdiccion_id" name="jurisdiccion_id" type="hidden" value="<?php echo $jurisdiccion_id ?>">
							<label for="jurisdiccion" class="active"><b>Jurisdicción Eclesiástica (*)</b></label>
						</div>
                    </div>                    

					<div class="row">
							<div class="input-field col s6">
								<i class="mdi-social-person-outline prefix"></i>
								<input id="sacerdoteCelebrante" name="sacerdoteCelebrante" type="text" value="<?php echo $sacerdoteCelebrante ?>">
								<input id="sacerdoteCelebrante_id" name="sacerdoteCelebrante_id" type="hidden">
								<label for="sacerdoteCelebrante" class="active"><b>Sacerdote Celebrante (*)</b></label>
							</div>
							<div class="input-field col s6">
								<i class="mdi-social-person-outline prefix"></i>
								<input  id="sacerdoteCertificador" name="sacerdoteCertificador" type="text" value="<?php echo $sacerdoteCertificador ?>">
								<input id="sacerdoteCertificador_id" name="sacerdoteCertificador_id" type="hidden">
								<label for="sacerdoteCertificador" class="active"><b>Sacerdote Certificador (*)</b></label>
							</div>
					</div>
				<font color="black" size="5" face="Lucida Calligraphy">Libro Sacramental</font><br><Br>							
                    <div class="row">
                      <div class="input-field col s4">
                        <i class="mdi-action-book prefix"></i>
                        <input id="libroOne" name="libroOne" type="text" value="<?php echo $libro ?>">
                        <label for="libro" class="active"><b>Libro (*)</b></label>
                      </div>
                      <div class="input-field col s4">
                        <i class="mdi-action-find-in-page prefix"></i>
                        <input id="paginaOne" name="paginaOne" type="text" value="<?php echo $pagina ?>">
                        <label for="pagina" class="active"><b>Página (*)</b></label>
                      </div>
                      <div class="input-field col s4">
                        <i class="mdi-editor-format-list-numbered prefix"></i>
                        <input id="numeroOne" name="numeroOne" type="text" value="<?php echo $numero ?>">
                        <label for="numero" class="active"><b>Número (*)</b></label>
                      </div>
                    </div>

					<font color="black" size="5" face="Lucida Calligraphy">Padrinos</font><br><Br>

					<div class="row">
						<div class="input-field col s6">
							<i class="mdi-social-person prefix"></i>
							<input id="apellidoNombrePadrino" name="apellidoNombrePadrino" type="text" value="<?php echo $padrino ?>">
							<label for="apellidoNombrePadrino" class="active"><b>Apellidos y Nombres del Padrino</b></label>
						</div>
						<div class="input-field col s6">
							<i class="mdi-social-person prefix"></i>
							<input id="apellidoNombreMadrina" name="apellidoNombreMadrina" type="text" value="<?php echo $madrina ?>">
							<label for="apellidoNombreMadrina" class="active"><b>Apellidos y Nombres de la Madrina</b></label>
						</div>
					</div>

                    <div class="row">
                        <div class="input-field col s7">
                          <input type="hidden" name="cod_obrasdatos" value="<?php echo $cod_obrasdatos ?>" />
                          <input type="hidden" name="cod_tipoobras" value="<?php echo $cod_tipoobras ?>" />
                          <input type="submit" name="mit" class="btn btn-primary" value="Guardar">
                          <button type="button" onclick="location.href='<?php echo site_url('editar') ?>'" class="btn btn-danger">Volver Atras</button>
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

<script type="text/javascript">
$(document).ready(function(){
		$("#feligres").autocomplete({
			source: "<?php echo base_url(); ?>users/autoCompleteFeligres",
			minLength: 1,
			select: function( event, ui ) {
				 $("#feligres_id").val(ui.item.id);
			}
		});
		$("#parroquia").autocomplete({
        source: "<?php echo base_url(); ?>jurisdiccion/autoCompleteParroquia",
        minLength: 1,
        select: function( event, ui ) {
           $("#parroquia_id").val(ui.item.id);
        }
      });
			$("#jurisdiccion").autocomplete({
	        source: "<?php echo base_url(); ?>jurisdiccion/autoCompleteJurisdiccion",
	        minLength: 1,
	        select: function( event, ui ) {
	           $("#jurisdiccion_id").val(ui.item.id);
	        }
	      });
			$("#sacerdoteCelebrante").autocomplete({
					source: "<?php echo base_url(); ?>users/autoCompleteSacerdoteCelebrante",
					minLength: 1,
					select: function( event, ui ) {
						 $("#sacerdoteCelebrante_id").val(ui.item.id);
					}
				});
				$("#sacerdoteCertificador").autocomplete({
						source: "<?php echo base_url(); ?>users/autoCompleteSacerdoteCelebrante",
						minLength: 1,
						select: function( event, ui ) {
							 $("#sacerdoteCertificador_id").val(ui.item.id);
						}
					});
	/*	$("#carnetPadre").autocomplete({
				source: "<?php echo base_url(); ?>users/autoCompleteCarnetPadre",
				minLength: 1,
				select: function (event, ui) {
						$("#carnetPadre_id").val(ui.item.id);
             $("#nombrePadre").val(ui.item.nombre);
				}
		});
    $("#carnetMadre").autocomplete({
				source: "<?php echo base_url(); ?>users/autoCompleteCarnetMadre",
				minLength: 1,
				select: function (event, ui) {
						$("#carnetMadre_id").val(ui.item.id);
             $("#nombreMadre").val(ui.item.nombre);
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

    $('#ci').focusout( function(){
    if($('#ci').val()!= ""){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>users/testare",
            data: "ci="+$('#ci').val(),
            beforeSend: function(){

              $('#msgUsuario').html('<img src="<?php echo base_url(); ?>assets/loader.gif"/> verificando');
            },
            success: function( respuesta ){
              if(respuesta == '1')
                $('#msgUsuario').html("<div id='card-alert' class='card green'><div class='card-content white-text'><b>Carnet de identidad disponible</b></div></div>");
              else if (respuesta == '0') {
                $('#msgUsuario').html("<div id='card-alert' class='card red'><div class='card-content white-text'><b>Carnet de identidad No Disponible</b></div></div>");
              }
              else {
                $('#msgUsuario').html("<div id='card-alert' class='card red'><div class='card-content white-text'><b>Ingrese un numero de carnet correcto</b></div></div>");
              }

            }
        });
    }*/
});

</script>