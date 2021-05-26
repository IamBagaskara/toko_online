<?php

class Model_kategori extends CI_Model{
	public function data_sepakbola(){
		return $this->db->get_where("tb_barang",array('kategori' => 'Sepak Bola'));
	}

	public function data_bulutangkis(){
		return $this->db->get_where("tb_barang",array('kategori' => 'Bulu Tangkis'));
	}

	public function data_bolabasket(){
		return $this->db->get_where("tb_barang",array('kategori' => 'Bola Basket'));
	}
}