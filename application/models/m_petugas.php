<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model {
	
	 function cek($username, $password){

	 	/*echo "user : ".$username."<br>";
		echo "pass : ".$password."<br>";*/

	 	$this->db->select('*');//ambil semua field
 		$this->db->from('petugas'); //pilih tabel target
		$this->db->where("user",$username); //cari data yang field user = isi variable $username
		$this->db->where("password",$password); //cari data yang field password = isi variable $password

		return $this->db->get(); //mengembalikan hasil eksekusi diatas
	}
	function semua(){
		return $this->db->get("petugas");
	}

}

/* End of file m_petugas.php */
/* Location: ./application/models/m_petugas.php */