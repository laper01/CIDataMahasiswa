<?php 

class people_model extends CI_model{

	public function getAllPeople(){
		return $this->db->get('people')->result_array();
	}
	public function getPeople($limit, $start, $cari=null){
		if($cari){
			$this->db->like('name', $cari);
			$this->db->or_like('email', $cari);
		}
		return $this->db->get('people', $limit, $start)->result_array();
	}
	public function countAllPeople(){
		return $this->db->get('people')->num_rows();
	}
}