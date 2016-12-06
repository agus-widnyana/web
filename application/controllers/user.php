<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_petugas');
	}

	public function proses_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		//echo $username."<br>";
		//echo $password."<br>";

		$cek = $this->m_petugas->cek($username, md5($password));
		$user = $cek->result(); //keluakan semua isi dari $cek yang sudah diurut ke fungsi $user

		//echo count($user);

		if (count($user)>0){
			//echo "pergi ke dashboard";
			$this->session->userdata('username', $username);
			redirect('dashboard','refresh'); // mendirect ke dashboard
		} else {
			//echo "login gagal";
			$this->session->flashdata('message','username atau password salah');
			redirect('user'); // mendirect kembali ke user
		}

	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */