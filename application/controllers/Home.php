<?php
class Home extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->Model('M_slide');
        $this->load->Model('M_about');
        $this->load->Model('M_content1');
        $this->load->Model('M_content2');
        $this->load->Model('M_testimonial');
        $this->load->Model('M_youtube');
        $this->load->Model('M_alasan');
        $this->load->Model('M_visimisi');
    }
     public function index()
     {
        $data['slide']	   = $this->M_slide->tampil_content();
        $data['about']	   = $this->M_about->tampil_content();
        $data['content1']  = $this->M_content1->tampil_content();
        $data['content2']  = $this->M_content2->tampil_content();
        $data['testimonial']  = $this->M_testimonial->tampil_content();
        $data['youtube']   = $this->M_youtube->tampil_content();
        $data['alasan']   = $this->M_alasan->tampil_content();
        $data['visimisi']  = $this->M_visimisi->tampil_content();
        $this->load->view('user',$data);
     }
}

?>