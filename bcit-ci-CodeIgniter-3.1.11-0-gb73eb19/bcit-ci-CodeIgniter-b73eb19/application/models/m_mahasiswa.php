<?php

class M_mahasiswa extends CI_Model{
	public function view_mhs(){
		return $this->db->get('tb_mahasiswa');
	}
}