<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Testimonial extends CI_Controller {

    public function index()
    {   
            
            $this->load->model('M_testimonial');
            $data['testimonial']= $this->M_testimonial->content();
            $this->template->load('template','testimonial/data_content',$data);    
    }
    
    function datatabel()
    {
        $this->template->load('template','testimonial/tambah_data');
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->load->model('M_testimonial');
        $datafoto=$this->M_testimonial->content_by_id($id);
        $this->M_testimonial->delete($id);
        $this->deleteimg($datafoto->foto);
        $data['testimonial']= $this->M_testimonial->content();
        $this->template->load('template','testimonial/data_content',$data);
    }
    
    function tambahdata()
    {
        $foto = $_FILES['foto']['name'];
        $datainput= array('judul'=>$_POST['judul'],
                          'deskripsi'=>$_POST['deskripsi'],
                          'foto'=>$foto);
        $this->load->model('M_testimonial');
        $this->M_testimonial->tambahdata($datainput);
        $this->aksi_upload();
    }

    function formtambahdata()
    {
        $this->template->load('template','testimonial/tambah_data');
    }

    function formeditdata()
    {
        $this->template->load('template','testimonial/ubah_data');
    }

    function edit()
    {$this->load->model('M_testimonial');
       if(isset($_POST['submit'])){
        
            // proses barang
            $foto =  $_FILES['foto']['name'];
            if($foto=="")
            {
                $id = $this->input->post('id');
                $judul     =   $this->input->post('judul');
                $deskripsi         =   $this->input->post('deskripsi');
                $data          = array('judul'=>$judul,
                                       'deskripsi'=>$deskripsi);
                $this->M_testimonial->edit($data,$id);
                //$this->aksi_upload();
                redirect('testimonial');
            }
            else
            {
                $id = $this->input->post('id');
                $fotodeleted= $this->M_testimonial->content_by_id($id);
                $judul         =   $this->input->post('judul');
                $deskripsi       =   $this->input->post('deskripsi');
                $data       = array('judul'=>$judul,
                                    'deskripsi'=>$deskripsi,
                                    'foto'=>$foto);
                $this->M_testimonial->edit($data,$id);
                $this->deleteimg($fotodeleted->foto);
                $this->aksi_upload();
            }
           
       
        }
        else{
            $id=  $this->uri->segment(3);
            $data['testimonial']= $this->M_testimonial->content_by_id($id);
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','testimonial/ubah_data',$data);
        }
    }


    public function aksi_upload(){
		$config['upload_path']          = './gambar_testimonial/';
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
            redirect('testimonial');
        }
    }

    function deleteimg($foto)
    {
        unlink('gambar_testimonial/'.$foto);
    }

}
