<?php

function chek_session()
{
    $CI = & get_instance();
    $session = $CI->session->userdata('status_login');
    if($session!='admin')
    {
        $CI->session->set_flashdata('warning', '<div class="alert alert-warning alert-dismissible" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <strong>Maaf!</strong> Untuk mengakses halaman ini anda harus login terlebih dahulu.
                                                </div>');
        redirect('home');
    }
}


function chek_session_login()
{
    $CI= & get_instance();
    $session=$CI->session->userdata('status_login');
    if($session=='oke')
    {
        redirect('dashboard');
    }
}
?>
