<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('text');
        $this->load->helper('url'); 
        $this->_init();
        $this->auth->cek_auth();
        $this->load->model(array('m_user'));
    }

    private function _init()
    {
        $this->output->set_template('admin');
    }
    
    public function index(){
        // menyimpan data user untuk dipassing ke view
        $data['users'] = $this->m_user->getAll();
        $this->load->view('user/index',$data);
    }

    public function create(){
        $this->load->view('user/create');
    }
    
    public function save(){
        $data=array(
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp')             
            );
        $this->m_user->m_create($data); 
        redirect(base_url().'user/');
    }

    public function delete($nik){
        $data=array(
            'nik' => $nik
            );
        $this->m_user->m_delete($data);
        redirect(base_url().'user/');
    }

    public function edit($nik){
        $data=array(
            'nik'=>$nik
            );
        $data['data_edit']=$this->m_user->m_edit($data);
        $this->load->view('user/edit',$data);
    }

    public function view($nik){
        $data=array(
            'nik'=>$nik
            );
        $data['data_edit']=$this->m_user->m_edit($data);
        $this->load->view('user/view',$data);
    }

    function update(){
        $nik = $this->input->post('nik');
        $data=array(            
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp')
            );
        $this->m_user->m_update($data,$nik);
        redirect(base_url().'user/');
    }

   
}