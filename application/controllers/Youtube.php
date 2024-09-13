<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Youtube extends CI_Controller {

    public function index()
    {   
            
            $this->load->model('M_youtube');
            $data['youtube']= $this->M_youtube->content();
            $this->template->load('template','youtube/data_content',$data);    
    }
    
    function datatabel()
    {
        $this->template->load('template','youtube/tambah_data');
    }


    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->load->model('M_youtube');
        $this->M_youtube->delete($id);
        $data['youtube']= $this->M_youtube->content();
        $this->template->load('template','youtube/data_content',$data);
    }
    
    function tambahdata()
    {
        $datainput= array('link'=>$_POST['link']);
        $this->load->model('M_youtube');
        $this->M_youtube->tambahdata($datainput);
        redirect('youtube');
    }

    function formtambahdata()
    {
        $this->template->load('template','youtube/tambah_data');
    }

    function formeditdata()
    {
        $this->template->load('template','youtube/ubah_data');
    }

    function edit()
    {$this->load->model('M_youtube');
       if(isset($_POST['submit'])){
        
            // proses barang
            $foto =  $_FILES['foto']['name'];
            if($foto=="")
            {
                $id = $this->input->post('id');
                $link         =   $this->input->post('link');
                $data          = array('link'=>$link);
                $this->M_youtube->edit($data,$id);
                //$this->aksi_upload();
                redirect('youtube');
            }
            else
            {
                $id = $this->input->post('id');
                $link       =   $this->input->post('link');
                $data       = array('link'=>$link);
                $this->M_youtube->edit($data,$id);
                redirect('youtube');
            }
           
       
        }
        else{
            $id=  $this->uri->segment(3);
            $data['youtube']= $this->M_youtube->content_by_id($id);
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','youtube/ubah_data',$data);
        }
    }
}
