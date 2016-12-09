<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class WisataRest extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_wisata');
  }

  public function getWisata()
  {
    $response = array(
      'wisata' => $this->m_wisata->getAll()->result()
      );

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($response, JSON_PRETTY_PRINT))
      ->_display();
      exit;
  }
}