<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->_init();
        $this->auth->cek_auth();
        $this->load->model(array('m_wisata'));
    }

    private function _init()
    {
        $this->output->set_template('admin');
    }
    
    public function index(){
        // menyimpan data user untuk dipassing ke view
        $data['wisatas'] = $this->m_wisata->getAll();
        $this->load->view('wisata/index',$data);
    }

    public function create(){
        $this->load->library('googlemaps');
        
        $config['center'] = '-6.912889,107.609787';
        $config['zoom'] = '14';
        $this->googlemaps->initialize($config);

        
        $marker = array();
        $marker['position'] = '-6.912889,107.609787';
        $marker['draggable'] = true;
        $marker['ondragend'] = 'setText(event.latLng.lat(), event.latLng.lng());';
        $this->googlemaps->add_marker($marker);
        
        $data['map'] = $this->googlemaps->create_map();
               
        $data['kategoris'] = $this->m_wisata->getAllKategoris();
        $this->load->view('wisata/create',$data);
    }
    
    public function save(){
        $data=array(
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'kategori' => $this->input->post('kategori'),
            'alamat' => $this->input->post('alamat'),
            'lat' => $this->input->post('lat'),
            'long' => $this->input->post('long'),
            'telepon' => $this->input->post('telepon'),
            'foto' => $this->input->post('foto'),
            'harga' => $this->input->post('harga'),
            'buka' => $this->input->post('buka'),
            'tutup' => $this->input->post('tutup')
            );
        $this->m_wisata->m_create($data); 
        redirect(base_url().'wisata/');
    }

    public function delete($id){
        $data=array(
            'id' => $id
            );
        $this->m_wisata->m_delete($data);
        redirect(base_url().'wisata/');
    }

    public function edit($id){
        $data=array(
            'id'=>$id
            );
        $data['data_edit']=$this->m_wisata->m_edit($data);
        $this->load->view('wisata/edit',$data);
    }

    public function view($id){
        $data=array(
            'id'=>$id
            );
        $data['data_edit']=$this->m_wisata->m_edit($data);

        $this->load->library('googlemaps');
        
            $config['center'] = '$value->lat,$value->long';
        
            $config['zoom'] = '14';
            $this->googlemaps->initialize($config);

        
        $marker = array();
        $marker['position'] = '$data->lat,$data->long';
        $this->googlemaps->add_marker($marker);
        
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('wisata/view',$data);
    }

    function update(){
        $id = $this->input->post('id');
        $data=array(            
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'kategori' => $this->input->post('kategori'),
            'alamat' => $this->input->post('alamat'),
            'lat' => $this->input->post('lat'),
            'long' => $this->input->post('long'),
            'telepon' => $this->input->post('telepon'),
            'foto' => $this->input->post('foto'),
            'harga' => $this->input->post('harga'),
            'buka' => $this->input->post('buka'),
            'tutup' => $this->input->post('tutup')
            );
        $this->m_wisata->m_update($data,$id);
        redirect(base_url().'wisata/');
    }
}