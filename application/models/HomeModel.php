<?php


class HomeModel extends CI_Model

{
	function __construct(){
		parent::__construct();

		$this->load->database();
	}

	public function getPresente(){

		return $this->db->query("select * from presentes")->result();

	}

	public function getConfirm($data){

		return $this->db->insert('usuariosConfirmados', $data);
	}

}
