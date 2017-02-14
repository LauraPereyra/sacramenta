<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sacrament_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function Register($table, $data)
  {
    $this->db->insert($table, $data);
    if ($this->db->affected_rows() == '1')
    {
      return TRUE;
    }
    return FALSE;
  }

  function editBaptism($a) {
    $d = $this->db->query("SELECT a.*,b.*,c.*,d.*,e.*,f.*, g.*, h.*, i.*
                           FROM certificado a, persona b, parroquia c, sacramento d, sacerdote e, jurisdiccion f, registrocivil g, libroparroquia h, padrinofiel i
                           WHERE a.idCertificado = '8'
                           AND b.id = a.persona_id AND b.id = e.persona_id 
                           AND c.idParroquia = a.parroquia_id
                           AND d.idSacramento = a.sacramento_id
                           AND a.sacerdoteCertificador_id = e.idSacerdote  
                           AND f.idJurisdiccion = a.jurisdiccion_id AND a.sacerdoteCelebrante_id = e.idSacerdote 
                           AND  a.idCertificado = g.certificado_id AND b.id = e.persona_id GROUP BY a.idCertificado ASC");
    if ($this->db->affected_rows() == '1')
    {
      return $d;
    }
    return FALSE;
       
  }

  function update_bautizo($idCertificado) {

    $idCertificado = $this->input->post('idCertificado');
    $nombres = $this->input->post('feligres');
    $persona_id = $this->input->post('feligres_id');
    $parroquia = $this->input->post('parroquia');
    $parroquia_id = $this->input->post('parroquia_id');
    $jurisdiccion = $this->input->post('jurisdiccion');
    $jurisdiccion_id = $this->input->post('jurisdiccion_id');
    $fecha = $this->input->post('fecha');
    $sacerdoteCelebrante_id = $this->input->post('sacerdoteCelebrante');
    $sacerdoteCertificador_id = $this->input->post('sacerdoteCertificador');
    $libro = $this->input->post('libroOne');    
    $pagina = $this->input->post('paginaOne');
    $numero = $this->input->post('numeroOne');
    $apellidosNombres = $this->input->post('apellidoNombrePadrino');
    $apellidosNombres = $this->input->post('apellidoNombreMadrina');

    $data = array(
      'fecha' => $fecha,
      'persona_id' => $persona_id,
      'parroquia_id' => $parroquia_id,
      'jurisdiccion_id' => $jurisdiccion_id,
      'sacerdoteCelebrante_id' => $sacerdoteCelebrante_id,
      'sacerdoteCertificador_id' => $sacerdoteCertificador_id
    );
    $this->db->where('idCertificado', $idCertificado);
    $this->db->update('certificado', $data);

  }

  public function getCertificate($persona_id,$fecha)
  {
    $this->db->select('*');
    $this->db->where('fecha', $fecha);
    $this->db->where('persona_id', $persona_id);
    $consult = $this->db->get('certificado');
      if ($consult->num_rows()>0) {
        return $consult->row();
      }
      else
      {
        return false;
      }
  }

  function listGetSacramento($table,$fields,$where='',$perpage=0,$start=0,$one=false,$array='array')
    {
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->order_by('idCertificado','asc');
        $this->db->limit($perpage,$start);
        if($where){
            $this->db->where($where);
        }
        $query = $this->db->get();
        $result =  !$one  ? $query->result() : $query->row();
        return $result;
    }

  function autoCompleteFeligres($q)
  {
    $query = $this->db->query("SELECT * FROM persona a, certificado b, sacramento c
                            WHERE c.idSacramento = '1'
                            AND a.id = b.persona_id
                            AND b.sacramento_id = c.idSacramento
                            AND (a.nombres LIKE '%$q%' OR a.apellidoPaterno LIKE '%$q%' OR a.apellidoMaterno LIKE '%$q%')
                            GROUP BY a.nombres  LIMIT 5");
    if ($query->num_rows() > 0 ) {
      foreach ($query->result_array() as $row){
          $row_set[] = array('label'=>'Nombre: '.$row['apellidoPaterno'].' '.$row['apellidoMaterno'].' '.$row['nombres'],'id'=>$row['id'], 'ci'=>$row['ci']);
      }
      echo json_encode($row_set);
    }
    else {
      $row_set[] = array('label'=>'Nombre no encontrado');
      echo json_encode($row_set);
    }
  }
}
