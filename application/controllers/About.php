<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class About extends CI_Controller {

    public function index()
    {   
            
            $this->load->model('M_about');
            $data['about']= $this->M_about->content();
            $this->template->load('template','about/data_content',$data);    
    }
    
    function datatabel()
    {
        $this->template->load('template','about/tambah_data');
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->load->model('M_about');
        $this->M_about->delete($id);
        $data['about']= $this->M_about->content();
        $this->template->load('template','about/data_content',$data);
    }
    
    function tambahdata()
    {
        $datainput= array('judul'=>$_POST['judul'],
                          'deskripsi'=>$_POST['deskripsi']);
        $this->load->model('M_about');
        $this->M_about->tambahdata($datainput);
        redirect('about');
    }

    function formtambahdata()
    {
        $this->template->load('template','about/tambah_data');
    }

    function formeditdata()
    {
        $this->template->load('template','about/ubah_data');
    }

    function edit()
    {$this->load->model('M_about');
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
                $this->M_about->edit($data,$id);
                //$this->aksi_upload();
                redirect('about');
            }
            else
            {
                $id = $this->input->post('id');
                $judul         =   $this->input->post('judul');
                $deskripsi       =   $this->input->post('deskripsi');
                $data       = array('judul'=>$judul,
                                    'deskripsi'=>$deskripsi);
                $this->M_about->edit($data,$id);
                redirect('about');
            }
           
       
        }
        else{
            $id=  $this->uri->segment(3);
            $data['about']= $this->M_about->content_by_id($id);
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','about/ubah_data',$data);
        }
    }
}
