<?php 

class people extends CI_controller{


//  untuk men aoutoload dalam satu contoller, jika ingin semua maka buka folder config file autoload
	public function __construct(){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('people_model','people');

	}


	public function index(){

		$data['judul']= 'List of people';

		// ambil search
		if($this->input->post('submit')){
			$data['cari'] = $this->input->post('cari');
			$this->session->set_userdata('cari', $data['cari']);
		}else{
			$data['cari'] = $this->session->userdata('cari');
		}

		//  bisa gak nulis panjang

		// pagenation konfig
		$data['start'] = $this->uri->segment(3);

		$config['base_url'] = 'http://localhost/CIApp/people/index';
		// 
		$this->db->like('name', $data['cari']);
		$this->db->from('people');

		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows']= $config['total_rows'];
		$config['per_page'] = 8;
		$config['num_links'] = 5;

		// style
		$config['full_tag_open'] = '<nav aria-label="Page navigation example"> <ul class="pagination justify-content-center">'; 
		$config['full_tag_close'] = '</ul></nav>';

		// 
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		// 
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		// 
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		// 
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		// 
		$config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
		$config['cur_tag_close'] = ' </a></li>';

		// 
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		// 
		$config['attributes'] = array('class' => 'page-link');

		// inisalizes
		$this->pagination->initialize($config);
		// echo $this->pagination->create_links();


		$data['people']=$this->people->getPeople($config['per_page'],$data['start'], $data['cari']);




		$this->load->view('templates/header',$data);
		$this->load->view('people/index', $data);
		$this->load->view('templates/footer');
	}
}


 ?>