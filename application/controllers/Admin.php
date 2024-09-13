<?php
class Admin extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('m_admin');
    }
     public function index()
     {
        $data['admin']=$this->m_admin->show_admin()->result();
        $this->template->load('template','Admin/v_admin',$data);
     }

     function tambah()
     {
        $datainput = array(
            'id_level' => $_POST['id_level'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'nama_user' => $_POST['nama_user'],
            'alamat' => $_POST['alamat'],
            'no_telp' => $_POST['no_telp']
        );
        $this->m_admin->simpan($datainput);
        redirect('Admin');
     }
    function hapus()
    {
       $kode=$this->input->post('kode');
       $this->m_admin->hapus($kode);
       redirect('Admin');
    }
    function edit()
    {
     $id=$this->input->post('id');
     $username=$this->input->post('username');
     $password=$this->input->post('password');
     $nama_user=$this->input->post('nama_user');
     $alamat=$this->input->post('alamat');
     $no_telp=$this->input->post('no_telp');
     $id_level=$this->input->post('id_level');
     $this->m_admin->update($id,$username,$password,$nama_user,$alamat,$no_telp,$id_level);
     redirect('Admin');
    }
   }
?>