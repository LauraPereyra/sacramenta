<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/validate.js"></script>

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
              <div class="card-panel">
                <h1 align="center">Registro de Sacerdotes</h1>
                <h4 class="header2">Informacion General</h4>
                <div class="row">
                  <form class="col s12" id="formPriest" method="post" action="<?php echo base_url(); ?>users/priestRegister">
                    <div class="row">
											<?php echo validation_errors(); ?>
											<?php echo form_error('ci'); ?>
                      <div class="input-field col s6">
                        <input id="ci" name="ci" type="text">
                        <label for="ci" class="">Carnet de Identidad</label>
                      </div>
											<div class="input-field col s6">
                        <input type="text" class="datepicker picker__input" readonly="" id="P19038440" name="fechanac" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P19038440_root"><div class="picker" id="P19038440_root" tabindex="0" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__date-display"><div class="picker__weekday-display">Tuesday</div><div class="picker__month-display"><div>Jan</div></div><div class="picker__day-display"><div>17</div></div><div class="picker__year-display"><div>2017</div></div></div><div class="picker__calendar-container"><div class="picker__header"><select class="picker__select--month browser-default" disabled="" aria-controls="P19038440_table" title="Select a month"><option value="0" selected="">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><select class="picker__select--year browser-default" disabled="" aria-controls="P19038440_table" title="Select a year"><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="P19038440_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="P19038440_table" title="Next month"> </div></div><table class="picker__table" id="P19038440_table" role="grid" aria-controls="P19038440" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">S</th><th class="picker__weekday" scope="col" title="Monday">M</th><th class="picker__weekday" scope="col" title="Tuesday">T</th><th class="picker__weekday" scope="col" title="Wednesday">W</th><th class="picker__weekday" scope="col" title="Thursday">T</th><th class="picker__weekday" scope="col" title="Friday">F</th><th class="picker__weekday" scope="col" title="Saturday">S</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483243200000" role="gridcell" aria-label="1 January, 2017">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483329600000" role="gridcell" aria-label="2 January, 2017">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483416000000" role="gridcell" aria-label="3 January, 2017">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483502400000" role="gridcell" aria-label="4 January, 2017">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483588800000" role="gridcell" aria-label="5 January, 2017">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483675200000" role="gridcell" aria-label="6 January, 2017">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483761600000" role="gridcell" aria-label="7 January, 2017">7</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483848000000" role="gridcell" aria-label="8 January, 2017">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483934400000" role="gridcell" aria-label="9 January, 2017">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484020800000" role="gridcell" aria-label="10 January, 2017">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484107200000" role="gridcell" aria-label="11 January, 2017">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484193600000" role="gridcell" aria-label="12 January, 2017">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484280000000" role="gridcell" aria-label="13 January, 2017">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484366400000" role="gridcell" aria-label="14 January, 2017">14</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484452800000" role="gridcell" aria-label="15 January, 2017">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484539200000" role="gridcell" aria-label="16 January, 2017">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1484625600000" role="gridcell" aria-label="17 January, 2017" aria-activedescendant="true">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484712000000" role="gridcell" aria-label="18 January, 2017">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484798400000" role="gridcell" aria-label="19 January, 2017">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484884800000" role="gridcell" aria-label="20 January, 2017">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484971200000" role="gridcell" aria-label="21 January, 2017">21</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485057600000" role="gridcell" aria-label="22 January, 2017">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485144000000" role="gridcell" aria-label="23 January, 2017">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485230400000" role="gridcell" aria-label="24 January, 2017">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485316800000" role="gridcell" aria-label="25 January, 2017">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485403200000" role="gridcell" aria-label="26 January, 2017">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485489600000" role="gridcell" aria-label="27 January, 2017">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485576000000" role="gridcell" aria-label="28 January, 2017">28</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485662400000" role="gridcell" aria-label="29 January, 2017">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485748800000" role="gridcell" aria-label="30 January, 2017">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485835200000" role="gridcell" aria-label="31 January, 2017">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1485921600000" role="gridcell" aria-label="1 February, 2017">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486008000000" role="gridcell" aria-label="2 February, 2017">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486094400000" role="gridcell" aria-label="3 February, 2017">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486180800000" role="gridcell" aria-label="4 February, 2017">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486267200000" role="gridcell" aria-label="5 February, 2017">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486353600000" role="gridcell" aria-label="6 February, 2017">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486440000000" role="gridcell" aria-label="7 February, 2017">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486526400000" role="gridcell" aria-label="8 February, 2017">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486612800000" role="gridcell" aria-label="9 February, 2017">9</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486699200000" role="gridcell" aria-label="10 February, 2017">10</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486785600000" role="gridcell" aria-label="11 February, 2017">11</div></td></tr></tbody></table></div><div class="picker__footer"><button class="btn-flat picker__today" type="button" data-pick="1484625600000" disabled="" aria-controls="P19038440">Today</button><button class="btn-flat picker__clear" type="button" data-clear="1" disabled="" aria-controls="P19038440">Clear</button><button class="btn-flat picker__close" type="button" data-close="true" disabled="" aria-controls="P19038440">Close</button></div></div></div></div></div></div>
                        <label for="fechanac">Fecha de nacimiento</label>
                      </div>
                      <!--<div class="input-field col s6">
                        <input id="email" name="email" type="text">
                        <label for="email">Correo Electronico</label>
                      </div>-->
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="nombre" name="nombre" type="text">
                        <label for="nombre" class="">Nombre</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="apellido" name="apellido" type="text">
                        <label for="apellido">Apellido</label>
                      </div>
                    </div>
                    <!--<div class="row">
                      <div class="input-field col s6">
                        <input type="text" class="datepicker picker__input" readonly="" id="P19038440" name="fechanac" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P19038440_root"><div class="picker" id="P19038440_root" tabindex="0" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__date-display"><div class="picker__weekday-display">Tuesday</div><div class="picker__month-display"><div>Jan</div></div><div class="picker__day-display"><div>17</div></div><div class="picker__year-display"><div>2017</div></div></div><div class="picker__calendar-container"><div class="picker__header"><select class="picker__select--month browser-default" disabled="" aria-controls="P19038440_table" title="Select a month"><option value="0" selected="">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><select class="picker__select--year browser-default" disabled="" aria-controls="P19038440_table" title="Select a year"><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017" selected="">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option></select><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="P19038440_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="P19038440_table" title="Next month"> </div></div><table class="picker__table" id="P19038440_table" role="grid" aria-controls="P19038440" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">S</th><th class="picker__weekday" scope="col" title="Monday">M</th><th class="picker__weekday" scope="col" title="Tuesday">T</th><th class="picker__weekday" scope="col" title="Wednesday">W</th><th class="picker__weekday" scope="col" title="Thursday">T</th><th class="picker__weekday" scope="col" title="Friday">F</th><th class="picker__weekday" scope="col" title="Saturday">S</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483243200000" role="gridcell" aria-label="1 January, 2017">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483329600000" role="gridcell" aria-label="2 January, 2017">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483416000000" role="gridcell" aria-label="3 January, 2017">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483502400000" role="gridcell" aria-label="4 January, 2017">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483588800000" role="gridcell" aria-label="5 January, 2017">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483675200000" role="gridcell" aria-label="6 January, 2017">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483761600000" role="gridcell" aria-label="7 January, 2017">7</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483848000000" role="gridcell" aria-label="8 January, 2017">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1483934400000" role="gridcell" aria-label="9 January, 2017">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484020800000" role="gridcell" aria-label="10 January, 2017">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484107200000" role="gridcell" aria-label="11 January, 2017">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484193600000" role="gridcell" aria-label="12 January, 2017">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484280000000" role="gridcell" aria-label="13 January, 2017">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484366400000" role="gridcell" aria-label="14 January, 2017">14</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484452800000" role="gridcell" aria-label="15 January, 2017">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484539200000" role="gridcell" aria-label="16 January, 2017">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1484625600000" role="gridcell" aria-label="17 January, 2017" aria-activedescendant="true">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484712000000" role="gridcell" aria-label="18 January, 2017">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484798400000" role="gridcell" aria-label="19 January, 2017">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484884800000" role="gridcell" aria-label="20 January, 2017">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1484971200000" role="gridcell" aria-label="21 January, 2017">21</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485057600000" role="gridcell" aria-label="22 January, 2017">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485144000000" role="gridcell" aria-label="23 January, 2017">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485230400000" role="gridcell" aria-label="24 January, 2017">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485316800000" role="gridcell" aria-label="25 January, 2017">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485403200000" role="gridcell" aria-label="26 January, 2017">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485489600000" role="gridcell" aria-label="27 January, 2017">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485576000000" role="gridcell" aria-label="28 January, 2017">28</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485662400000" role="gridcell" aria-label="29 January, 2017">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485748800000" role="gridcell" aria-label="30 January, 2017">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1485835200000" role="gridcell" aria-label="31 January, 2017">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1485921600000" role="gridcell" aria-label="1 February, 2017">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486008000000" role="gridcell" aria-label="2 February, 2017">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486094400000" role="gridcell" aria-label="3 February, 2017">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486180800000" role="gridcell" aria-label="4 February, 2017">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486267200000" role="gridcell" aria-label="5 February, 2017">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486353600000" role="gridcell" aria-label="6 February, 2017">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486440000000" role="gridcell" aria-label="7 February, 2017">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486526400000" role="gridcell" aria-label="8 February, 2017">8</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486612800000" role="gridcell" aria-label="9 February, 2017">9</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486699200000" role="gridcell" aria-label="10 February, 2017">10</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1486785600000" role="gridcell" aria-label="11 February, 2017">11</div></td></tr></tbody></table></div><div class="picker__footer"><button class="btn-flat picker__today" type="button" data-pick="1484625600000" disabled="" aria-controls="P19038440">Today</button><button class="btn-flat picker__clear" type="button" data-clear="1" disabled="" aria-controls="P19038440">Clear</button><button class="btn-flat picker__close" type="button" data-close="true" disabled="" aria-controls="P19038440">Close</button></div></div></div></div></div></div>
                        <label for="fechanac">Fecha de nacimiento</label>
                      </div>
                      <div class="input-field col s6">
                        <select id="genero" name="genero">
          				        <option value="" disabled selected> Seleccione un genero</option>
          				        <option value="1">Masculino</option>
          				        <option value="2">Femenino</option>
          				      </select>
          				      <label>Genero: </label>
                      </div>
                    </div>-->
                    <h4 class="header2">Informacion de Sacerdote</h4>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="parroquia" name="parroquia" type="text">
                        <input id="parroquia_id" name="parroquia_id" type="hidden">
                        <label for="parroquia" class="">Parroquia</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="tipoSacerdote" name="tipoSacerdote" type="text">
												<input type="hidden" name="tipoSacerdote_id" id="tipoSacerdote_id">
                        <label for="tipoSacerdote">Tipo de Sacerdote</label>
                      </div>
                    </div>
                    <h4 class="header2">Informacion de la Cuenta</h4>
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="email" name="email" type="text">
                        <label for="email" class="">Correo Electronico</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="password" name="password" type="password">
                        <label for="password">Contraseña</label>
                      </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
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
<script type="text/javascript">
$(document).ready(function(){

		$("#parroquia").autocomplete({
        source: "<?php echo base_url(); ?>jurisdiccion/autoCompleteParroquia",
        minLength: 1,
        select: function( event, ui ) {
           $("#parroquia_id").val(ui.item.id);
        }
      });
		$("#tipoSacerdote").autocomplete({
				source: "<?php echo base_url(); ?>users/autoCompleteTipoSacerdote",
				minLength: 1,
				select: function (event, ui) {
						$("#tipoSacerdote_id").val(ui.item.id);
				}
		});
});
</script>
