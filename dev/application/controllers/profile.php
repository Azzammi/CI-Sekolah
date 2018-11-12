<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function index(){
		$data = array(
			'title'=>'HOME',
			'informasi' => $this->db->query('SELECT * FROM informasi GROUP BY id DESC LIMIT 3'),
			'berita' 	=> $this->db->query('SELECT * FROM content WHERE kategori = "berita" GROUP BY id DESC LIMIT 7'),
			'gallery' 	=> $this->db->query('SELECT * FROM gallery GROUP BY id DESC LIMIT 1')->row_array(),
			'banner' 	=> $this->db->get('banner'),
			'profile' 	=> $this->db->get_where('halaman',array('url'=>'profile'))->row_array(),
			);
		$this->template->load('main/v_template','main/v_profile',$data);
	}


}
