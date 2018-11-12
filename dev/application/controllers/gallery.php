<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {


	function ambil($param = NULL){
            $data = array(
                'title'=>'Gallery',
                'param' => $param,
                'informasi' => $this->db->query('SELECT * FROM informasi GROUP BY id DESC LIMIT 3'),
                'berita' 	=> $this->db->query('SELECT * FROM content WHERE kategori = "berita" GROUP BY id DESC LIMIT 7'),
                'gallery' 	=> $this->db->query('SELECT * FROM gallery GROUP BY id DESC LIMIT 1')->row_array(),
                //'record' 	=> $this->db->query('SELECT * FROM gallery'),
                'record'    => $this->db->get_where('gambar',array('kategori' => $param)),
                'banner' 	=> $this->db->get('banner'),
                );
            $this->template->load('main/v_template','main/v_gallery',$data);
        
	}
}
