<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site{

    public $side;
    public $template;
    public $template_setting;
    public $website_setting;
    public $_isHome = FALSE;
    public $_isCategory = FALSE;
    public $_isSearch = FALSE;
    public $_isDetail = FALSE;

    function view($pages, $data=NULL){
        $_this =& get_instance();
        $data ? 
        $_this->load->view($this->side.'/'.$this->template.'/'.$pages, $data) 
        :
        $_this->load->view($this->side.'/'.$this->template.'/'.$pages);
    }

    function is_logged_in(){
        $_this =& get_instance();
        $user_session = $_this->session->userdata;
        if($this->side != 'login'){
            if($this->uri->segment(2) == 'login'){
                if(isset($user_session['logged_in']) && $user_session['logged_in'] == TRUE && $user_session['group_user'] == 'admin'){
                    redirect(set_url('dashboard'));
                }
            }
            else{
                if(!isset($user_session['logged_in']) || $user_session['group_user'] != 'admin'){
                    $_this->session->sess_destroy();
                    redirect(set_url('user/login'));
                }
            }
        }
        else{
            if(!isset($user_session['logged_in'])){
                $_this->session->sess_destroy();
                redirect(set_url('user/login'));
            }
        }
    }
}