<?php
class Dashboard extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }
     public function index()
     {
        $this->template->load('template','v_dashboard');
     }
}

?>
