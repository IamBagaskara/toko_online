<?php

class Kategori extends CI_Controller{
	public function sepakbola(){

		$data['sepakbola'] = $this->model_kategori->data_sepakbola()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('sepakbola', $data);
		$this->load->view('templates/footer');		

	}

	public function bulutangkis(){
		$data['bulutangkis'] = $this->model_kategori->data_bulutangkis()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('bulutangkis', $data);
		$this->load->view('templates/footer');		

	}

	public function bolabasket(){
		$data['bolabasket'] = $this->model_kategori->data_bolabasket()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('bolabasket', $data);
		$this->load->view('templates/footer');		

	}
}