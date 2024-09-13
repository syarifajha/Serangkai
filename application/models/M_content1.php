<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_content1 extends CI_Model {

    function tampil_content()
    {
        $query="SELECT * FROM content1";
        $data=$this->db->query($query)->result();
        return $data;
    }

    function content()
    {
        $query="SELECT * FROM content1";
        $data=$this->db->query($query)->result();
        return $data;
    }

    function content_by_id($id)
    {
        $query="SELECT * FROM content1 where id='".$id."'";
        $data=$this->db->query($query)->row();
        return $data;
    } 

    function delete($id)
    {
        $query="DELETE FROM content1 where id='".$id."'";
        $data=$this->db->query($query);

    } 

    function tambahdata($datainput)
    {
        $this->db->insert('content1',$datainput);
    }
    function edit($datainput, $id) {
        $update = $this->db->update('content1', $datainput, array('id' => $id));
		return $update;
	}
    function post()
    {
        
        $query = "SELECT max(id as maxKode from content1";
        $check = $this->db->query($query);
        $data = $check->row();
		$id    = $data->maxKode;
		$no = (int) substr($id,3,3);
		$no++;
		
        
        $id = $newID;
        $foto   =   $this->input->post('foto');
        $data       = array('foto'=>$foto,
                            'id'=> $id,
                            'foto'=>'gambar_content1/'.$_FILES['berkas']['name']);
        $this->db->insert('content1',$data);
    }
}


