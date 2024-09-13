<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_testimonial extends CI_Model {

    function tampil_content()
    {
        $query="SELECT * FROM testimonial";
        $data=$this->db->query($query)->result();
        return $data;
    }

    function content()
    {
        $query="SELECT * FROM testimonial";
        $data=$this->db->query($query)->result();
        return $data;
    }

    function content_by_id($id)
    {
        $query="SELECT * FROM testimonial where id='".$id."'";
        $data=$this->db->query($query)->row();
        return $data;
    } 

    function delete($id)
    {
        $query="DELETE FROM testimonial where id='".$id."'";
        $data=$this->db->query($query);

    } 

    function tambahdata($datainput)
    {
        $this->db->insert('testimonial',$datainput);
    }
    function edit($datainput, $id) {
        $update = $this->db->update('testimonial', $datainput, array('id' => $id));
		return $update;
	}
    function post()
    {
        
        $query = "SELECT max(id as maxKode from testimonial";
        $check = $this->db->query($query);
        $data = $check->row();
		$id    = $data->maxKode;
		$no = (int) substr($id,3,3);
		$no++;
		
        
        $id = $newID;
        $foto   =   $this->input->post('foto');
        $data       = array('foto'=>$foto,
                            'id'=> $id,
                            'foto'=>'gambar_testimonial/'.$_FILES['berkas']['name']);
        $this->db->insert('testimonial',$data);
    }
}


