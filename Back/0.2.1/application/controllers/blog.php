<?php

class Blog extends CI_Controller
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
        $this->load->view('v_home');
        $this->load->view('footer');
    }
    function home_co($start = 0)
    {
        $data['posts'] = $this->m_db->get_posts(5, $start);
        
        //pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url().'blog/home_co/';
        $config['total_rows'] = $this->m_db->get_post_count();
        $config['per_page'] = 5; 
        $this->pagination->initialize($config); 
        $data['pages'] = $this->pagination->create_links(); //liens des pages
        
        $class_name = array(
            'home_class'=>'current', 
            'login_class' => '', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');
        $this->load->view('header',$class_name);
        $this->load->view('v_home_co',$data);
        $this->load->view('footer');
    }
    function post($post_id)//page publication single_post page
    {   
        $this->load->model('m_comment');
        $data['comments'] = $this->m_comment->get_comment($post_id);    
        $data['post'] = $this->m_db->get_post($post_id);
        $data['session'] = $this->session->userdata('user_id') ? true:false;
        $class_name = array(
            'home_class'=>'current', 
            'login_class' =>'', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');
        $this->load->view('header',$class_name);
        $this->load->view('v_single_post',$data);
        $this->load->view('footer');
    }

    
    function new_post()
    {
        if(!$this->check_permissions('author'))
        {
            redirect(base_url().'users/login');
        }
        if($this->input->post())
        {
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post' => $this->input->post('post'),
                'active' => 1,
                'user_id' => $this->session->userdata("user_id"),
            );
            $this->m_db->insert_post($data);
            redirect(base_url().'blog/');
        }
        else{
            
            $class_name = array(
            'home_class'=>'current', 
            'login_class' =>'', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');
            $this->load->view('header',$class_name);
            $this->load->view('v_new_post');
            $this->load->view('footer');
        }
    }
    function editpost($post_id)//modifier une annonce 
    {
        if(!$this->check_permissions('author'))
        {
            redirect(base_url().'users/login');
        }
        $data['success'] = 0;
        
        if($this->input->post())
        {
            $data = array(
                'post_title' => $this->input->post('post_title'),
                'post' => $this->input->post('post'),
                'active' => 1
            );
            $this->m_db->update_post($post_id, $data);
            $data['success'] = 1;
        }
        $data['post'] = $this->m_db->get_post($post_id);
        
        $class_name = array(
            'home_class'=>'current', 
            'login_class' =>'', 
            'register_class' => '',
            'upload_class'=>'',
            'contact_class'=>'');
        $this->load->view('header',$class_name);
        $this->load->view('v_edit_post',$data);
        $this->load->view('footer');
    }
    function deletepost($post_id)//supprimer une annonce
    {
        if(!$this->check_permissions('author'))
        {
            redirect(base_url().'users/login');
        }
        $this->m_db->delete_post($post_id);
        redirect(base_url().'blog/');
    }
    
    function check_permissions($required)
    {
        $user_type = $this->session->userdata('user_type');
        if($required == 'user') 
        {
            if($user_type){return TRUE;}
        }
        elseif($required == 'author')
        {
            if($user_type == 'author' || $user_type == 'admin')
            {
                return TRUE;
            }
        }
        elseif($required == 'admin')//quand l'admin est requit
        {
            if($user_type == 'admin'){return TRUE;}//que les admin ont la permission
        }
    }
}

