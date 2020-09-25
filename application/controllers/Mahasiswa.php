<?php 

class Mahasiswa extends CI_controller{


//  untuk men aoutoload dalam satu contoller, jika ingin semua maka buka folder config file autoload
	public function	__construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
		// $this->load->helper('url');
	}

	public function index(){

		$data['judul']= 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		if($this->input->post('cari')){
			$data['mahasiswa']= $this->Mahasiswa_model->cariDataMahasiswa();
		}
		$this->load->view('templates/header',$data);
		$this->load->view('mahasiswa/index');
		$this->load->view('templates/footer');
	}

	public function tambah(){
		// karna method action nya dikosongkan yang ada di :(view mahasiswa tambah php) maka dataform akan dikirim kembali ke method tambah sehingga untuk form validation
		$data['judul']= 'Form Tambah Data Mahasiswa';
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
		if($this->form_validation->run() == FALSE){
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/tambah');
		$this->load->view('templates/footer');

		}else{
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('mahasiswa');
		}
	}

	public function hapus($id){
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('mahasiswa');
	}

	public function detail($id){
		$data['judul'] = 'Detail Data Mahasiswa';

		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('templates/footer');

	}
	public function ubah($id){
		// karna method action nya dikosongkan yang ada di :(view mahasiswa tambah php) maka dataform akan dikirim kembali ke method tambah sehingga untuk form validation
		$data['judul']= 'Form Ubah Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] =['Teknik Informatika', 'Teknik Elektro', 'Teknik Industri', 'Teknik Mesin'];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
		if($this->form_validation->run() == FALSE){
		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/ubah', $data);
		$this->load->view('templates/footer');

		}else{
			$this->Mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata('flash','diUbah');
			redirect('mahasiswa');
		}
	}
}


 ?>