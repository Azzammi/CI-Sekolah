<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {


	function __construct(){
		parent::__construct();

		
	}

	function index(){
		$data = array(
			'title'		=>'FORUM',
			'sidebar' 	=> $this->sidebar(),
			'record'	=> $this->db->query('SELECT * FROM forum GROUP BY id DESC'));
		$this->template->load('main/v_template','main/v_forum',$data);
	}

	function sidebar(){
		$data = array(
			'informasi' => $this->db->query('SELECT * FROM informasi GROUP BY id DESC LIMIT 3'),
			'berita' 	=> $this->db->query('SELECT * FROM content WHERE kategori = "berita" GROUP BY id DESC LIMIT 7'),
			'gallery' 	=> $this->db->query('SELECT * FROM gallery GROUP BY id DESC LIMIT 1')->row_array(),
			'banner' 	=> $this->db->get('banner'),
		);
		return $this->load->view('main/v_sidebar',$data,true);
	}

	function add_topik(){
		// chek_session();
		if(isset($_POST['simpan'])){
			$data = array(
				'oleh'		=> $this->input->post('oleh'),
				'judul'		=> $this->input->post('judul'),
				'text'		=> $this->input->post('isitopik'));
			$this->db->insert('forum',$data);
			redirect('forum');
		}else{
			$data = array(
				'title'		=>'FORUM',
				'sidebar' 	=> $this->sidebar());
			$this->template->load('main/v_template','main/v_forum_add',$data);
		}
	}

	function komen($id){
		// chek_session();
		if(isset($_POST['kirim'])){
			$data = array(
				'id_forum'	=> $this->input->post('id'),
				'oleh'		=> $this->input->post('oleh'),
				'komen'		=> $this->input->post('komen'));
			$this->db->insert('forum_komen',$data);
			redirect('forum/komen/'.$this->input->post('id'));
		}else{
			$data = array(
			'title'		=>'FORUM',
			'sidebar' 	=> $this->sidebar(),
			'forum'		=> $this->db->get_where('forum',array('id'=>$id))->row_array(),
			'komen'		=> $this->db->get_where('forum_komen',array('id_forum'=>$id)));
			$this->template->load('main/v_template','main/v_forum_komen',$data);
		}
	}
}
