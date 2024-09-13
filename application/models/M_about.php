<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model {

    function tampil_content()
    {
        $query="SELECT * FROM about";
        $data=$this->db->query($query)->result();
        return $data;
    }

    function content()
    {
        $query="SELECT * FROM about";
        $data=$this->db->query($query)->result();
        return $data;
    }

    function content_by_id($id)
    {
        $query="SELECT * FROM about where id='".$id."'";
        $data=$this->db->query($query)->row();
        return $data;
    } 

    function delete($id)
    {
        $query="DELETE FROM about where id='".$id."'";
        $data=$this->db->query($query);

    } 

    function tambahdata($datainput)
    {
        $this->db->insert('about',$datainput);
    }
    function edit($datainput, $id) {
        $update = $this->db->update('about', $datainput, array('id' => $id));
		return $update;
	}
}


