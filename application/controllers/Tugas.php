<?php
class Tugas extends CI_Controller{
	public function index(){
		$this->load->view('tugas/artikel');
		$this->load->view('tugas/footer');
		$this->load->view('tugas/home');
		$this->load->view('tugas/login');
		$this->load->view('tugas/sambutan');
	}
}