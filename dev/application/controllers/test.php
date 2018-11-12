<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends Frontend_Controller{
	
    function __construct(){
		parent::__construct();

		$this->load->model(array('User_model'));
    }    

	public function index(){
		$data = array(
			'username' => 'admin',
			'password' => 'admin',
			'group_user' => 'admin',
			'email' => 'luthfia911@gmail.com'
		);

		$id = $this->User_model->insert($data);		

		$data = array('group_user' => 'pengguna');

		$this->User_model->update($data, array('ID' => $id));

		$this->User_model->delete($id);

		$this->user_detail = $this->User_model->get_by(
			array('username' => 'admin', 'group_user' => 'admin'), 1, NULL, TRUE
		);

		$this->site->view('welcome_message'); 
		echo get_template_directory(dirname(__FILE__),'css/style.css');
	}
}