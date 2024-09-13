<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Alasan extends CI_Controller {

    public function index()
    {   
            
            $this->load->model('M_alasan');
            $data['alasan']= $this->M_alasan->content();
            $this->template->load('template','alasan/data_content',$data);    
    }
    
    function datatabel()
    {
        $this->template->load('template','alasan/tambah_data');
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->load->model('M_alasan');
        $this->M_alasan->delete($id);
        $data['alasan']= $this->M_alasan->content();
        $this->template->load('template','alasan/data_content',$data);
    }
    
    function tambahdata()
    {
        $datainput= array('judul'=>$_POST['judul'],
                          'deskripsi'=>$_POST['deskripsi']);
        $this->load->model('M_alasan');
        $this->M_alasan->tambahdata($datainput);
        redirect('alasan');
    }

    function formtambahdata()
    {
        $this->template->load('template','alasan/tambah_data');
    }

    function formeditdata()
    {
        $this->template->load('template','alasan/ubah_data');
    }

    function edit()
    {$this->load->model('M_alasan');
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
                $this->M_alasan->edit($data,$id);
                //$this->aksi_upload();
                redirect('alasan');
            }
            else
            {
                $id = $this->input->post('id');
                $judul         =   $this->input->post('judul');
                $deskripsi       =   $this->input->post('deskripsi');
                $data       = array('judul'=>$judul,
                                    'deskripsi'=>$deskripsi);
                $this->M_alasan->edit($data,$id);
                redirect('alasan');
            }
           
       
        }
        else{
            $id=  $this->uri->segment(3);
            $data['alasan']= $this->M_alasan->content_by_id($id);
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','alasan/ubah_data',$data);
        }
    }
}
