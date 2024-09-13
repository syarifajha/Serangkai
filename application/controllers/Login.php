<?php

class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }
    public function index()
    {
        $this->load->view('login/v_login');
    }
    
    public function aksi_login(){
        $post=$this->input->post(null,TRUE);
        if(isset($post['login'])){
        $query =$this->m_login->login($post);
        if($query->num_rows() > 0){
            $row = $query->row();
            $params= array(
                'id'=>$row->id,
                'id_level'=>$row->id_level
            );
            $this->session->set_userdata($params);
            echo "<script>
            alert('Login Berhasil');
            window.location='".site_url('dashboard') ."';
            </script>";
        }else{
            echo "<script>
            alert('Login Gagal');
            window.location='".site_url('login') ."';
            </script>";
        }
      }
    }
    public function aksi_login_supp(){
        $post=$this->input->post(null,TRUE);
        if(isset($post['login'])){
        $query =$this->m_login->login($post);
        if($query->num_rows() > 0){
            $row = $query->row();
            $params= array(
                'id'=>$row->id,
                'id_level'=>$row->id_level
            );
            $this->session->set_userdata($params);
            echo "<script>
            alert('login berhasil');
            window.location='".site_url('dashboard') ."';
            </script>";
        }else{
            echo "<script>
            alert('login gagal');
            window.location='".site_url('login_supp') ."';
            </script>";
        }
      }
    }
    public function logout(){
        $params = array('id','id_level');
        $this->session->unset_userdata($params);
            echo "<script>
            alert('Logout Berhasil');
            window.location='".site_url('login') ."';
            </script>";
    }
}