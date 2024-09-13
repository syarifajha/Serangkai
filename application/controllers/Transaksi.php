<?php
Class Transaksi extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('m_barang');
        $this->load->Model('m_user');
    }

    public function index()
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->join('barang', 'barang.id_barang = penjualan.kd_barang ');
        $this->db->join('user', 'user.id_user = penjualan.id_user ');
        $this->db->where('status',0);
        $data['penjualan']=$this->db->get()->result();
        $data['user']=$this->m_user->show_user()->result();
        $this->template->load('template','penjualan/v_penjualan',$data);
        

    }

    public function add()
    {
        $data=[
            'id_user' => $this->input->post('id_user'),
            'kd_barang'    => $this->input->post('kd_barang'),
            'jumlah'         => $this->input->post('jumlah'),
        ];
        $this->db->insert('penjualan',$data);
        redirect('Transaksi');
    }
    
    public function cancel()
    {
        $id=$this->uri->segment(3);
        $this->db->where('id_jual',$id);
        $this->db->delete('penjualan');
        redirect('Transaksi');
    }

    public function selesai()
    {
        $update=[
            'status'=>1
        ];
        $this->db->where('status',0);
        $this->db->update('penjualan',$update);
        redirect('Transaksi');
    }
    function nota()
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->join('barang', 'barang.id_barang = penjualan.kd_barang');
        $this->db->where('status',0);
        $data['penjualan']=$this->db->get()->result();
        $this->load->view('penjualan/nota', $data);
    }
    function e_pay()
    {
        $this->load->view('penjualan/e_pay');
    }
}
?>