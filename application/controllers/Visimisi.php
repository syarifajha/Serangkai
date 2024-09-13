<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Visimisi extends CI_Controller {

    public function index()
    {   
            
            $this->load->model('M_visimisi');
            $data['visimisi']= $this->M_visimisi->content();
            $this->template->load('template','visimisi/data_content',$data);    
    }
    
    function datatabel()
    {
        $this->template->load('template','visimisi/tambah_data');
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->load->model('M_visimisi');
        $this->M_visimisi->delete($id);
        $data['visimisi']= $this->M_visimisi->content();
        $this->template->load('template','visimisi/data_content',$data);
    }
    
    function tambahdata()
    {
        $datainput= array('judul'=>$_POST['judul'],
                          'deskripsi'=>$_POST['deskripsi']);
        $this->load->model('M_visimisi');
        $this->M_visimisi->tambahdata($datainput);
        redirect('visimisi');
    }

    function formtambahdata()
    {
        $this->template->load('template','visimisi/tambah_data');
    }

    function formeditdata()
    {
        $this->template->load('template','visimisi/ubah_data');
    }

    function edit()
    {$this->load->model('M_visimisi');
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
                $this->M_visimisi->edit($data,$id);
                //$this->aksi_upload();
                redirect('visimisi');
            }
            else
            {
                $id = $this->input->post('id');
                $judul         =   $this->input->post('judul');
                $deskripsi       =   $this->input->post('deskripsi');
                $data       = array('judul'=>$judul,
                                    'deskripsi'=>$deskripsi);
                $this->M_visimisi->edit($data,$id);
                redirect('visimisi');
            }
           
       
        }
        else{
            $id=  $this->uri->segment(3);
            $data['visimisi']= $this->M_visimisi->content_by_id($id);
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','visimisi/ubah_data',$data);
        }
    }
}
