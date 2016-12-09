<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PenggunaRest extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_pengguna');
  }

  public function getPengguna($page, $size)
  {

    $response = array(
      'content' => $this->m_pengguna->getPengguna(($page - 1) * $size, $size)->result(),
      'totalPages' => ceil($this->m_pengguna->getCountPengguna() / $size));

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function savePengguna()
  {
      //$dataPengguna = (array)json_decode(file_get_contents('php://input'));
      $dataPengguna=array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
            );


      $this->m_pengguna->insertPengguna($dataPengguna);

      $response = array(
        'Success' => true,
        'Info' => 'Data Tersimpan');

      $this->output
        ->set_status_header(201)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($response, JSON_PRETTY_PRINT))
        ->_display();
        exit;
  }

  public function updatePengguna($id)
  {
    $dataPengguna = (array)json_decode(file_get_contents('php://input'));
    $this->m_pengguna->updatePengguna($dataPengguna, $id);

    $response = array(
      'Success' => true,
      'Info' => 'Data Berhasil di update');

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function deletePengguna($id)
  {
    $this->m_pengguna->deletePengguna($id);

    $response = array(
      'Success' => true,
      'Info' => 'Data Berhasil di hapus');

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

  public function loginPengguna(){
    
    //$dataPengguna = (array)json_decode(file_get_contents('php://input'));

    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $cek = $this->m_pengguna->cek_pengguna($username,$password);
  
    if(count($cek) == 1){
          foreach ($cek as $cek) {
                $name = $cek['name']; 
            }
          
          $response = array(
            'Success' => true,
            'name' => $name,
            'username' => $username
            );
        }else{
            $response = array(
            'Success' => false,
            );
        }

      $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }

}