<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->_init();
		$this->auth->cek_auth(); //ngambil auth dari library
	}

	private function _init()
    {
        $this->output->set_template('admin');
    }

	function index()
	{
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('nik'));
		$data = array(
			'user'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('level');
		if($stat==1){//admin
			$this->load->view('dashboard_admin',$data);
		}else{ //user
			$this->load->view('dashboard_user',$data);
		}
		
	}
	function login()
	{
		$session = $this->session->userdata('isLogin');
    	if($session == FALSE)
    	{
      		$this->load->view('login_form');
    	}else
    	{
      		redirect('dashboard');
    	}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}