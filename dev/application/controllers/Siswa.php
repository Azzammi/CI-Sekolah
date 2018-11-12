<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $data = array(
            'title' => 'PPDB',
            'sidebar' => $this->sidebar(),
        );
        $this->template->load('main/v_template','main/v_ppdb',$data);
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
    
    function siswa_add(){
		if(isset($_POST['simpan'])){
			$data = array(
				'nis'				=> $this->input->post('nis'),
				'nama'				=> $this->input->post('nama'),
				'jk'				=> $this->input->post('jk'),
				'agama'				=> $this->input->post('agama'),
				'alamat'			=> $this->input->post('alamat'),
				'ttl'				=> $this->input->post('ttl'),
				'kelas'				=> $this->input->post('kelas'));
			$this->db->insert('dir_siswa',$data);
			redirect('Siswa');
		}else{
			$data['title'] = 'Modul Data Siswa';
			$this->template->load('main/v_template','main/v_ppdb',$data);
		}
	}
}