<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Slide extends CI_Controller {

    public function index()
    {   
            
            $this->load->model('M_slide');
            $data['slide']= $this->M_slide->content();
            $this->template->load('template','slide/data_content',$data);    
    }
    
    function datatabel()
    {
        $this->template->load('template','slide/tambah_data');
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->load->model('M_slide');
        $datafoto=$this->M_slide->content_by_id($id);
        $this->M_slide->delete($id);
        $this->deleteimg($datafoto->foto);
        $data['slide']= $this->M_slide->content();
        $this->template->load('template','slide/data_content',$data);
    }
    
    function tambahdata()
    {
        $foto = $_FILES['foto']['name'];
        $datainput= array('foto'=>$foto);
        $this->load->model('M_slide');
        $this->M_slide->tambahdata($datainput);
        $this->aksi_upload();
    }

    function formtambahdata()
    {
        $this->template->load('template','slide/tambah_data');
    }

    function formeditdata()
    {
        $this->template->load('template','slide/ubah_data');
    }

    function edit()
    {$this->load->model('M_slide');
       if(isset($_POST['submit'])){
        
            // proses barang
            $foto =  $_FILES['foto']['name'];
            if($foto=="")
            {
                $id = $this->input->post('id');
                $judul     =   $this->input->post('judul');
                $deskripsi         =   $this->input->post('deskripsi');
                $this->M_slide->edit($id);
                //$this->aksi_upload();
                redirect('slide');
            }
            else
            {
                $id = $this->input->post('id');
                $fotodeleted= $this->M_slide->content_by_id($id);
                $judul         =   $this->input->post('judul');
                $deskripsi       =   $this->input->post('deskripsi');
                $data       = array('foto'=>$foto);
                $this->M_slide->edit($data,$id);
                $this->deleteimg($fotodeleted->foto);
                $this->aksi_upload();
            }
           
       
        }
        else{
            $id=  $this->uri->segment(3);
            $data['slide']= $this->M_slide->content_by_id($id);
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','slide/ubah_data',$data);
        }
    }


    public function aksi_upload(){
		$config['upload_path']          = './gambar_slide/';
		$config['allowed_types']        = '*';
		//$config['max_size']             = 100;
		//$config['max_width']            = 1024;
		//$config['max_height']           = 768;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			echo json_encode($error);
		}else{
            $data = array('upload_data' => $this->upload->data());
            redirect('slide');
        }
    }

    function deleteimg($foto)
    {
        unlink('gambar_slide/'.$foto);
    }

}
