<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_visimisi extends CI_Model {

    function tampil_content()
    {
        $query="SELECT * FROM visimisi";
        $data=$this->db->query($query)->result();
        return $data;
    }

    function content()
    {
        $query="SELECT * FROM visimisi";
        $data=$this->db->query($query)->result();
        return $data;
    }

    function content_by_id($id)
    {
        $query="SELECT * FROM visimisi where id='".$id."'";
        $data=$this->db->query($query)->row();
        return $data;
    } 

    function delete($id)
    {
        $query="DELETE FROM visimisi where id='".$id."'";
        $data=$this->db->query($query);

    } 

    function tambahdata($datainput)
    {
        $this->db->insert('visimisi',$datainput);
    }
    function edit($datainput, $id) {
        $update = $this->db->update('visimisi', $datainput, array('id' => $id));
		return $update;
	}
    function post()
    {
        
        $query = "SELECT max(id as maxKode from visimisi";
        $check = $this->db->query($query);
        $data = $check->row();
		$id    = $data->maxKode;
		$no = (int) substr($id,3,3);
		$no++;
		
        
        $id = $newID;
        $foto   =   $this->input->post('foto');
        $data       = array('foto'=>$foto,
                            'id'=> $id,
                            'foto'=>'gambar_visimisi/'.$_FILES['berkas']['name']);
        $this->db->insert('visimisi',$data);
    }
}


