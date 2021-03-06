<div id="login-page" class="row">
  <div class="col s12 z-depth-4">
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
  <div class="col s12 z-depth-5 card-panel">
    <!--<form class="login-form" id="formLogin" method="post" action="<?php echo base_url(); ?>login/checkLogin">-->
        <?php echo form_open('login/checkLogin', 'class="login-form"','method=post','id="formLogin"'); ?>
      <div class="row">
        <div class="input-field col s12 center">
          <h1>Bienvenido</h1>
          <img src="<?php echo base_url(); ?>assets/demo/images/logo.jpg" alt="" class="circle responsive-img valign profile-image-login">
          <p class="center login-form-text"><b>Ingreso de Fieles</b></p>
        </div>
      </div>

      <div class="row margin">
        <div class="input-field col s12">
          <i class="mdi-social-person-outline prefix"></i>
          <input id="email" name="email" type="text" >
          <label for="email" class="center-align">Correo</label>
        </div>
      </div><br>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="mdi-action-lock-outline prefix"></i>
          <input id="password" name="password" type="password" autofocus>
          <label for="password">Contraseña</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 m12 l12  login-text">
            <input type="checkbox" id="remember-me" />
            <label for="remember-me">Recordar</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button class="btn waves-effect waves-light col s12"/> Aceptar</button>
        </div>
      </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
                <a class="btn waves-effect waves-light light-blue darken-4" href="<?php echo base_url(); ?>users/faithfulAccount">Registrate Ahora</a>
            </div>
            <div class="input-field col s6 m6 l6">
                <a class="btn waves-effect waves-light light-blue darken-4">Recuperar Cuenta</a>
            </div>
          </div>
          </form>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/demo/js/plugins/jquery-1.11.2.min.js"></script>

<script src="<?php echo base_url()?>assets/validate.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#email').focus();
    $('#formLogin').validate({
      rules :{
            email: { required: true, email: true},
            password: { required: true}
      },
      messages:{
            email: { required: '<b>Campo Requerido.</b>', email: '<b>Ingrese un Email válido</b>'},
            password: {required: '<b>Campo Requerido.</b>'}
      },
      submitHandler: function (form){
          var datos = $(form).serialize();
          $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>login/checkLogin?ajax=true",
            data: datos,
            dataType: 'json',
            success: function(data)
            {
              if(data.result == true)
              {
                window.location.href = "<?php echo base_url();?>home";
              }
              else
              {
                $('#call-modal').trigger('click');
              }
            }
          });
          return false;
      },
      errorClass: "help-inline",
      errorElement: "span",
      highlight:function(element, errorClass, validClass) {
          $(element).parents('.control-group').addClass('error');
      },
      unhighlight: function(element, errorClass, validClass) {
          $(element).parents('.control-group').removeClass('error');
          $(element).parents('.control-group').addClass('success');
      }
    });
  });
</script>
<p><a class="waves-effect waves-light btn modal-trigger teal " id="call-modal" role="button" href="#notification" style="display: none ">Modal with Color</a>
                </p>
<div id="notification" class="modal" style="z-index: 1003; display: none; opacity: 0; transform: scaleX(0.7); top: 336.97px;">

<div class="modal-content">
    <h4 align="center">Datos Incorrectos</h4>
    <h6 style="text-align: center">Intente nuevamente</h6>
</div>

<div class="modal-footer orange">
    <a href="#" class="waves-effect waves-orange btn-flat modal-action modal-close" style="margin-right: 2%">ACEPTAR</a>
</div>

</div>
    <!--  <a href="#notification" id="call-modal" role="button" class="btn" data-toggle="modal" style="display: none ">notification</a>
        <div id="notification" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="myModalLabel">MapOS</h4>
          </div>
          <div class="modal-body">
            <h5 style="text-align: center">El acceso a los datos es incorrecto, por favor intente de nuevo!</h5>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Fechar</button>
          </div>
        </div>-->
