<?php
Class m_user extends CI_Model{

    public function show_user()
    {
        $query="SELECT * FROM user WHERE id_level = '2'";
        $data=$this->db->query($query);
        return $data;
    }

    function simpan($datainput)
    {
         $this->db->insert('user',$datainput);
    }
    function update($id_user,$username,$password,$nama_user,$alamat,$no_telp,$id_level)
    {
        $hsl = $this->db->query("UPDATE user set username='$username',password='$password',nama_user='$nama_user',alamat='$alamat',no_telp='$no_telp',id_level='$id_level' where id_user='$id_user'");
        return $hsl;

    }
    function hapus($kode)
    {
        $post = $this->db->query("DELETE FROM user where id_user='$kode'");
        return $post;
    }
	function total_jenis_admin()
	{
		$query = "SELECT * FROM user WHERE id_level = '1'";
		$data = $this->db->query($query);
		return $data->num_rows();
	}
    function total_jenis_kasir()
	{
		$query = "SELECT * FROM user WHERE id_level = '2'";
		$data = $this->db->query($query);
		return $data->num_rows();
	}
}
?>