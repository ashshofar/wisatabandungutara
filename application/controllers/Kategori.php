<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->_init();
        $this->auth->cek_auth();
        $this->load->model(array('m_kategori'));
    }

    private function _init()
    {
        $this->output->set_template('admin');
    }
    
    public function index(){
        // menyimpan data user untuk dipassing ke view
        $data['kategoris'] = $this->m_kategori->getAll();
        $this->load->view('kategori/index',$data);
    }

    public function create(){
        $this->load->view('kategori/create');
    }
    
    public function save(){
        $data=array(
            'id' => $this->input->post('id'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi')
            );
        $this->m_kategori->m_create($data); 
        redirect(base_url().'kategori/');
    }

    public function delete($id){
        $data=array(
            'id' => $id
            );
        $this->m_kategori->m_delete($data);
        redirect(base_url().'kategori/');
    }

    public function edit($id){
        $data=array(
            'id'=>$id
            );
        $data['data_edit']=$this->m_kategori->m_edit($data);
        $this->load->view('kategori/edit',$data);
    }

    public function view($id){
        $data=array(
            'id'=>$id
            );
        $data['data_edit']=$this->m_kategori->m_edit($data);
        $this->load->view('kategori/view',$data);
    }

    function update(){
        $id = $this->input->post('id');
        $data=array(            
            'id' => $this->input->post('id'),
            'kategori' => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi')
            );
        $this->m_kategori->m_update($data,$id);
        redirect(base_url().'kategori/');
    }
}