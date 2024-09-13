<?php

classn fungsi{

    function _construct()
    {
        $this->ci = & get instance();
    }

    fumction petugas_login()
    {
        $this->ci->load->model('m_login');
        $id_petugas =$this->ci->session->userdata('id_petugas');
        $user_data = $this->ci->m_login->get_petugas($id_petugas)->row();
        return$user_data;
    }
}