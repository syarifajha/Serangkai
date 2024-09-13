<?php
Class m_admin extends CI_Model{

    public function show_admin()
    {
        $query="SELECT * FROM user WHERE id_level = '1'";
        $data=$this->db->query($query);
        return $data;
    }

    function simpan($datainput)
    {
         $this->db->insert('user',$datainput);
    }
    function update($id,$username,$password,$nama_user,$alamat,$no_telp,$id_level)
    {
        $hsl = $this->db->query("UPDATE user set username='$username',password='$password',nama_user='$nama_user',alamat='$alamat',no_telp='$no_telp',id_level='$id_level' where id='$id'");
        return $hsl;

    }
    function hapus($kode)
    {
        $post = $this->db->query("DELETE FROM user where id='$kode'");
        return $post;
    }

}
?>