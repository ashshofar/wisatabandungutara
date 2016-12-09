<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->_init();
        $this->auth->cek_auth();
        $this->load->model(array('m_pengguna2'));
    }

    private function _init()
    {
        $this->output->set_template('admin');
    }
    
    public function index(){
        // menyimpan data user untuk dipassing ke view
        $data['penggunas'] = $this->m_pengguna2->getAll();
        $this->load->view('pengguna/index',$data);
    }

    public function create(){
        $this->load->view('pengguna/create');
    }
    
    public function save(){
        $data=array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
            );
        $this->m_pengguna2->m_create($data); 
        redirect(base_url().'pengguna/');
    }

    public function delete($id){
        $data=array(
            'id' => $id
            );
        $this->m_pengguna2->m_delete($data);
        redirect(base_url().'pengguna/');
    }

    public function edit($id){
        $data=array(
            'id'=>$id
            );
        $data['data_edit']=$this->m_pengguna2->m_edit($data);
        $this->load->view('pengguna/edit',$data);
    }

    public function view($id){
        $data=array(
            'id'=>$id
            );
        $data['data_edit']=$this->m_pengguna2->m_edit($data);
        $this->load->view('pengguna/view',$data);
    }

    function update(){
        $id = $this->input->post('id');
        $data=array(            
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
            );
        $this->m_pengguna2->m_update($data,$id);
        redirect(base_url().'pengguna/');
    }
}