<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	function index(){
		$data = array(
			'title'		=>'Home',
			'sidebar' 	=> $this->sidebar());
		$this->template->load('main/v_template','main/v_home',$data);
	}

	function sidebar(){
		$data = array(
			'informasi' => $this->db->query('SELECT * FROM informasi GROUP BY id DESC LIMIT 3'),
			'berita' 	=> $this->db->query('SELECT * FROM content WHERE kategori = "berita" GROUP BY id DESC LIMIT 7'),
			'gallery' 	=> $this->db->query('SELECT * FROM gallery GROUP BY id DESC LIMIT 1')->row_array(),
			'sambutan' 	=> $this->db->get_where('halaman',array('url'=>'sambutan'))->row_array(),
			'banner' 	=> $this->db->get('banner'),
		);
		return $this->load->view('main/v_sidebar',$data,true);
	}

	function detail_berita($id){
		$data['sidebar'] = $this->sidebar();
		$data['record'] = $this->db->get_where('content',array('id'=>$id))->row_array();
		$this->template->load('main/v_template','main/v_berita_detail',$data);
	}

}
