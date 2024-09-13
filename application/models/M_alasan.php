<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_alasan extends CI_Model {

    function tampil_content()
    {
        $query="SELECT * FROM alasan";
        $data=$this->db->query($query)->result();
        return $data;
    }

    function content()
    {
        $query="SELECT * FROM alasan";
        $data=$this->db->query($query)->result();
        return $data;
    }

    function content_by_id($id)
    {
        $query="SELECT * FROM alasan where id='".$id."'";
        $data=$this->db->query($query)->row();
        return $data;
    } 

    function delete($id)
    {
        $query="DELETE FROM alasan where id='".$id."'";
        $data=$this->db->query($query);

    } 

    function tambahdata($datainput)
    {
        $this->db->insert('alasan',$datainput);
    }
    function edit($datainput, $id) {
        $update = $this->db->update('alasan', $datainput, array('id' => $id));
		return $update;
	}
}


