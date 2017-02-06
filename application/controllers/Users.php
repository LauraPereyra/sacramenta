<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Users_model');
    $this->load->model('Jurisdiccion_model');

  }

  function index()
  {
    $this->usuarioRegister();
  }

  function usuarioRegister()
  {
    if (!$this->session->userdata('nombres')) {
      redirect(base_url().'login');
    }
    if ($this->session->userdata('tipo') != 'administrador') {
        if (!$this->session->userdata('nombres')) {
            redirect(base_url().'login');
        }
        else
        {
          redirect(base_url().'home'); 
        }
    }
    $data['title'] = 'Registro Fieles';
    $this->load->view('template/header',$data);
    $this->load->view('users/usuarioCreate');
    $this->load->view('template/footer');
  }

  function faithfulAccount()
  {
    $data['msj_error'] = '';
    $this->load->view('login/header');
    $this->load->view('users/faithfulAccount',$data);
    $this->load->view('login/footer2');
  }
  function faithfulRegister()
  {
    if (!$this->session->userdata('nombres')) {
      redirect(base_url().'login');
    }
    if ($this->session->userdata('tipo') != 'administrador') {
        if (!$this->session->userdata('nombres')) {
            redirect(base_url().'login');
        }
        else
        {
          redirect(base_url().'home');
        }
    }
    $data['title'] = 'Registro Fiel';
    $this->load->view('template/header',$data);
    $this->load->view('users/faithfulRegister');
    $this->load->view('template/footer');
  }

  function listSacerdote($offset = NULL)
  {
    if (!$this->session->userdata('nombres')) {
      redirect(base_url().'login');
    }
    if ($this->session->userdata('tipo') != 'administrador') {
        if (!$this->session->userdata('nombres')) {
            redirect(base_url().'login');
        }
        else
        {
          redirect(base_url().'home');
        }
    }
    $data['title'] = 'Lista de Sacerdotes';
    $this->load->library('table');
        $this->load->library('pagination');

        $config['base_url'] = base_url().'users/listSacerdote';
        $config['total_rows'] = $this->Users_model->count('sacerdote','persona');
        $config['per_page'] = 10;
        $config['next_link'] = 'Próxima';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<div class="pagination alternate"><ul>';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a style="color: #2D335B"><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['first_link'] = 'Primeira';
        $config['last_link'] = 'Última';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    $data['results']= $this->Users_model->listGetSacerdote('persona, sacerdote, tiposacerdote',' id, idSacerdote, ci, nombres, apellidoPaterno,apellidoMaterno, tipoSacerdote','id = persona_id AND idTipoSacerdote = tipoSacerdote_id',$config['per_page'],$this->uri->segment(3));
    $this->load->view('template/header',$data);
    $this->load->view('users/listSacerdote',$data);
    $this->load->view('template/footer');
  }

  function faithfullCreate()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ci', 'Carnet de Identidad', 'trim|min_length[5]|numeric|is_unique[persona.ci]|xss_clean');
    $this->form_validation->set_rules('apellidoPaterno', 'Apellido Paterno', 'trim|required|min_length[2]|xss_clean');
    $this->form_validation->set_rules('apellidoMaterno', 'Apellido Materno', 'trim|required|min_length[2]|xss_clean');
    $this->form_validation->set_rules('nombres', 'Nombre', 'trim|required|min_length[2]|xss_clean');
    $this->form_validation->set_rules('fechanac', 'Fecha nacimineto', 'trim|required|xss_clean');
    $this->form_validation->set_rules('genero', 'Genero', 'trim|required|xss_clean');
    $this->form_validation->set_rules('procedencia', 'Procedencia', 'trim|required|xss_clean');
  /*  $this->form_validation->set_rules('orc', 'Oficialía de registro civil', 'trim|required|xss_clean');
    $this->form_validation->set_rules('libro', 'Libro', 'trim|required|xss_clean');
    $this->form_validation->set_rules('partida', 'Partida', 'trim|required|xss_clean');*/
    $this->form_validation->set_message('required', 'El %s es importante');
    if ($this->form_validation->run()==false) {
        $this->session->set_flashdata('error','Ingrese correctamente los datos');
        redirect(base_url() . 'users/faithfulRegister');
    }
    else {
      $tipoGenero = $this->input->post('genero');
      if ($tipoGenero == '1') {
        $genero = 'masculino';
      }
      else {
        $genero = 'femenino';
      }
        $data = array(
          'ci' => $this->input->post('ci'),
          'nombres' => $this->input->post('nombres'),
          'apellidoPaterno' => $this->input->post('apellidoPaterno'),
          'apellidoMaterno' => $this->input->post('apellidoMaterno'),
          'fechanacimiento' => $this->input->post('fechanac'),
          'procedencia' => $this->input->post('procedencia'),
          'genero' => $genero
        );
        $persona_id = $this->Users_model->registerWithId('persona',$data);
        if ($persona_id != False)
        {
          $padre = $this->input->post('apellidoNombrePadre');
          $madre = $this->input->post('apellidoNombreMadre');
          $procedenciaPadre = $this->input->post('procedenciaPadre');
          $procedenciaMadre = $this->input->post('procedenciaMadre');
          if ($padre != null ) {
              $data = array(
                  'apellidoNombrePadre' => $padre,
                  'procedenciaPadre' => $procedenciaPadre,
                  'persona_id' => $persona_id
              );
              $this->Users_model->personRegister('padresfiel',$data);
          }
          if ($madre != null) {
              $data = array(
                  'apellidoNombrePadre' => $madre,
                  'procedenciaPadre' => $procedenciaMadre,
                  'persona_id' => $persona_id
              );
              $this->Users_model->personRegister('padresfiel',$data);
          }

          $data = array(
              'orc' => $this->input->post('orc'),
              'libro' => $this->input->post('libro'),
              'partida' => $this->input->post('partida'),
              'persona_id' => $persona_id
          );
          if ($this->Users_model->personRegister('certificadonacimiento',$data)) {
            $this->session->set_flashdata('success','Fiel Registrado correctamente!');
            redirect(base_url() . 'users/faithfulRegister');
          }
          else {
            $this->session->set_flashdata('error ','Error al registrar su informacion personal (Oficialía)');
            redirect(base_url() . 'users/faithfulRegister');
          }
        }
        else {
          $this->session->set_flashdata('error ','Error al registrar su informacion personal (id persona)');
          redirect(base_url() . 'users/faithfulRegister');
        }
    }
  }
  function faithfulAccountRegister()
  {
    $tipoUsuario = 'fiel';
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ci', 'Carnet de Identidad', 'trim|min_length[5]|numeric|is_unique[cuenta.ci]|xss_clean');
    $this->form_validation->set_rules('apellidoPaterno', 'Apellido Paterno', 'trim|required|min_length[2]|xss_clean');
    $this->form_validation->set_rules('apellidoMaterno', 'Apellido Materno', 'trim|required|min_length[2]|xss_clean');
    $this->form_validation->set_rules('nombres', 'Nombre', 'trim|required|min_length[2]|xss_clean');
    $this->form_validation->set_rules('fechanac', 'Fecha nacimineto', 'trim|required|xss_clean');
    $this->form_validation->set_rules('genero', 'Genero', 'trim|required|xss_clean');
    #$this->form_validation->set_rules('celular', 'Celular', 'trim|required|min_length[5]|max_length[12]|xss_clean');
    #$this->form_validation->set_rules('facebook', 'Facebook', 'trim|required|min_length[5]|max_length[12]|xss_clean');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]|valid_email|is_unique[users.email]|xss_clean');
    $this->form_validation->set_rules('password', 'Contraseña', 'trim|required|min_length[2]|max_length[18]|xss_clean');
    $this->form_validation->set_message('required', 'El %s es importante');
    if ($this->form_validation->run()==false)
    {
        $this->session->set_flashdata('error','Ingrese correctamente los datos');
        redirect(base_url() . 'users/faithfulAccount');
    }
    else {
      if ($this->input->post('genero') == '1') {
          $genero = 'masculino';
      }
      else {
          $genero = 'femenino';
      }
        $data = array(
          'ci'=> $this->input->post('ci'),
          'apellidoPaterno' => $this->input->post('apellidoPaterno'),
          'apellidoMaterno' => $this->input->post('apellidoMaterno'),
          'nombres' => $this->input->post('nombres'),
          'celular' => $this->input->post('celular'),
          'facebook' => $this->input->post('facebook'),
          'fechanacimiento' => $this->input->post('fechanac'),
          'genero' => $genero
        );
        if ($this->Users_model->personRegister('cuenta',$data) == TRUE)
        {
          $ci = $this->input->post('ci');
          $personWithCi = $this->Users_model->getId($ci);
          $persona_id = $personWithCi->idCuenta;
        /*  print_r($personWithCi).'<br>';
          echo $personWithCi.'<br>';
          echo $persona_id;*/
            $data = array(
              'email' => $this->input->post('email'),
              'password' => $this->input->post('password'),
              'tipoUsuario' => $tipoUsuario,
              'cuenta_id' => $persona_id
            );
            if ($this->Users_model->usersRegister('users', $data) == TRUE) {
              $this->session->set_flashdata('success','Fiel Registrado correctamente!');
              redirect(base_url() . 'login');
            }
            else
            {
              $this->session->set_flashdata('error ','Error al registrar su informacion de la cuenta');
              redirect(base_url() . 'login/faithfulAccount');
            }
        }
        else
        {
          $this->session->set_flashdata('error ','Error al registrar su informacion personal');
          redirect(base_url() . 'login/faithfulAccount');
        }
    }
  /*  $this->load->view('login/header');
    $this->load->view('users/faithfulAccount');
    $this->load->view('login/footer');*/
  }

  

  function usuarioCreate()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('fechanac', 'Fecha nacimineto', 'trim|required|xss_clean');
    $this->form_validation->set_rules('genero', 'Genero', 'trim|required|xss_clean');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]|valid_email|is_unique[users.email]|xss_clean');
    $this->form_validation->set_rules('password', 'Contraseña', 'trim|required|min_length[5]|max_length[18]|xss_clean');
    $this->form_validation->set_message('required', 'El %s es importante');
    if ($this->form_validation->run()==false)
    {
        $this->session->set_flashdata('error','Ingrese correctamente los datos');
        redirect(base_url() . 'users/usuarioRegister');
    }
    else {
        $data = array(
          'ci'=> $this->input->post('ci'),
          'apellidoPaterno' => $this->input->post('apellidoPaterno'),
          'apellidoMaterno' => $this->input->post('apellidoMaterno'),
          'nombres' => $this->input->post('nombres'),
          'celular' => $this->input->post('celular'),
          'facebook' => $this->input->post('facebook'),
          'fechanacimiento' => $this->input->post('fechanac'),
          'genero' => $this->input->post('genero')
        );
        if ($this->Users_model->personRegister('cuenta',$data) == TRUE){
          $ci = $this->input->post('ci');
          $personWithCi = $this->Users_model->getId($ci);
          $persona_id = $personWithCi->idCuenta;
            $data = array(
              'email' => $this->input->post('email'),
              'password' => $this->input->post('password'),
              'tipoUsuario' => $this->input->post('tipoUsuario'),
              'cuenta_id' => $persona_id
            );
            if ($this->Users_model->usersRegister('users', $data) == TRUE) {
              $this->session->set_flashdata('success ','Fiel Registrado correctamente!');
              redirect(base_url() . 'users/usuarioRegister');
            }
            else
            {
              $this->session->set_flashdata('error ','Error al registrar su informacion de la cuenta');
              redirect(base_url() . 'users/usuarioRegister');
            }
        }
        else
        {
          $this->session->set_flashdata('error ','Error al registrar su informacion personal');
          redirect(base_url() . 'users/usuarioRegister');
        }
    }
  }


  function /() {
    if (!$this->session->userdata('nombres')) {
      redirect(base_url().'login');
    }
    if ($this->session->userdata('tipo') != 'administrador') {
        if (!$this->session->userdata('nombres')) {
            redirect(base_url().'login');
        }
    }
    $kd = $this->uri->segment(3);
    if ($kd == NULL) {
      redirect(base_url().'home');
    }
     $dt = $this->Users_model->edit($kd);
     $data1['ci'] = $dt->ci;
     $data1['fechanacimiento'] = $dt->fechanacimiento;
     $data1['nombres'] = $dt->nombres;
     $data1['apellidoPaterno'] = $dt->apellidoPaterno;
     //$data1['parroquia'] = $dt->parroquia_id;
     $data1['tipoSacerdote'] = $dt->tipoSacerdote;
     $data1['email'] = $dt->email;
     $data1['password'] = $dt->password;
     $data1['id'] = $kd;

        $this->load->view('template/header');
        $this->load->view('users/sacerdoteEdit', $data1);
        $this->load->view('template/footer');

  }

  function update() {

    if ($this->input->post('mit')) {

      $idSacerdote = $this->input->post('idSacerdote');
      $this->Users_model->update($idSacerdote);

      redirect('users');
    } else{
      redirect('users/sacerdoteEdit/'.$idSacerdote);
    }

  }

  function autoCompleteCarnetPadre(){
      if (isset($_GET['term'])) {
          $data = strtolower($_GET['term']);
          $this->Users_model->autoCompleteCarnetPadre($data);
      }
  }
  function autoCompleteCarnetMadre(){
      if (isset($_GET['term'])) {
          $data = strtolower($_GET['term']);
          $this->Users_model->autoCompleteCarnetMadre($data);
      }
  }
  function autoCompleteCarnetPadrino(){
      if (isset($_GET['term'])) {
          $data = strtolower($_GET['term']);
          $this->Users_model->autoCompleteCarnetPadre($data);
      }
  }
  function autoCompleteSacerdote(){
      if (isset($_GET['term'])) {
          $data = strtolower($_GET['term']);
          $this->Users_model->autoCompleteSacerdote($data);
      }
  }
  function autoCompleteCarnetMadrina(){
      if (isset($_GET['term'])) {
          $data = strtolower($_GET['term']);
          $this->Users_model->autoCompleteCarnetMadre($data);
      }
  }

  function autoCompleteEsposo(){
      if (isset($_GET['term'])) {
          $data = strtolower($_GET['term']);
          $this->Users_model->autoCompleteEsposo($data);
      }
  }

  function autoCompleteEsposa(){
      if (isset($_GET['term'])) {
          $data = strtolower($_GET['term']);
          $this->Users_model->autoCompleteEsposa($data);
      }
  }

  function autoCompleteCarnetCommunion(){
      if (isset($_GET['term'])) {
          $data = strtolower($_GET['term']);
          $this->Users_model->autoCompleteCarnetCommunion($data);
      }
  }

  function autoCompleteCarnetConfirmacion(){
      if (isset($_GET['term'])) {
          $data = strtolower($_GET['term']);
          $this->Users_model->autoCompleteCarnetConfirmacion($data);
      }
  }
  function autoCompleteFeligres()
  {
    if (isset($_GET['term'])) {
        $data = strtolower($_GET['term']);
        $this->Users_model->autoCompleteFeligres($data);
    }
  }
  function autoCompleteSacerdoteCelebrante()
  {
    if (isset($_GET['term'])) {
        $data = strtolower($_GET['term']);
        $this->Users_model->autoCompleteSacerdoteCelebrante($data);
    }
  }
  function autoCompleteFeligresConfirmacion()
  {
    if (isset($_GET['term'])) {
        $data = strtolower($_GET['term']);
        $this->Users_model->autoCompleteFeligresConfirmacion($data);
    }
  }
}
