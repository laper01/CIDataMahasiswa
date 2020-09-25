<?php 	

class Mahasiswa_model extends CI_model{
	public function getAllMahasiswa(){
		return $query = $this->db->get('mahasiswa') -> result_array();
	}
	public function tambahDataMahasiswa(){
		$data = [
			// biar ndak kena sql enjection
			"nama"=>$this->input->post('nama',true),
			"nrp"=>$this->input->post('nrp',true),
			"email"=>$this->input->post('email',true),
			"jurusan"=>$this->input->post('jurusan',true)

		];

		$this->db->insert('mahasiswa',$data);
	}

	public function hapusDataMahasiswa($id){
		$this->db->where('id',$id);
		$this->db->delete('mahasiswa');
	}

	public function getMahasiswaById($id){
		return $this->db->get_where('mahasiswa',['id'=>$id])->row_array();
	}

		public function ubahDataMahasiswa(){
		$data = [
			// biar ndak kena sql enjection
			"nama"=>$this->input->post('nama',true),
			"nrp"=>$this->input->post('nrp',true),
			"email"=>$this->input->post('email',true),
			"jurusan"=>$this->input->post('jurusan',true)

		];
		$this->db->where('id',$this->input->post('id',true));
		$this->db->update('mahasiswa',$data);
	}

	public function cariDataMahasiswa(){
		$cari = $this->input->post('cari', true);
		$this->db->like('nama', $cari);
		$this->db->or_like('jurusan', $cari);
		$this->db->or_like('nrp', $cari);
		return $this->db->get('mahasiswa')->result_array();
	}

}

 ?>