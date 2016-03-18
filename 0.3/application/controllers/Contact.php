<?php

class Contact extends CI_Controller
{   
    function __construct() 
    {
        parent::__construct();
        $this->load->model('m_db');

    }
    function index($start = 0)//index page
    {
        $class_name = array(
            'home_class'=>'current', 
            'login_class' => '', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');
        $this->load->view('header',$class_name);
        $this->load->view('v_contact');
        $this->load->view('footer');
    }

}

    ?>