<?php
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class Backend_Controller extends MY_Controller{

    function __construct(){
        parent::__construct();

        $this->load->helper(array());
        $this->load->library(array('form_validation'));        
        $this->load->model(array('User_model')); 

        $this->site->side = 'login';

        //$this->site->is_logged_in();
    }
}