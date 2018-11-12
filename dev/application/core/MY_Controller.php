<?php
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class MY_Controller extends CI_Controller{
 
    public $data = array();

    function __construct(){
        parent::__construct();

        $this->load->helper(array('template_helper','user_helper'));
        $this->load->library(array('Site','session'));
        $this->load->model(array());
    }
}