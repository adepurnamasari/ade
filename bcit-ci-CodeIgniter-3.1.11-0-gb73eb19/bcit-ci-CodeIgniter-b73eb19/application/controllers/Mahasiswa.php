<?php

class Mahasiswa extends CI_Controller{
	public function index(){
		$data['mahasiswa'] = $this->m_mahasiswa->view_mhs()->result();

		$this->load->view('mahasiswa', $data);
			}
}