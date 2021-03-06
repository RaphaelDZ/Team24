<?php

class Emails extends CI_Controller
{
    function email()
    {
        $this->load->model('m_user');
        $email = $this->m_user->get_emails();
        $this->load->library('email');
        
        foreach ($email as $row)
        {
            if($row['email'])
            {
                $this->email->from('ilyan.alouani@ynov.com');
                $this->email->to($row['email']);
                $this->email->subject('New Letter form Ilyan');
                $this->email->message('Hi, This a news letter form ilyan. Thank you for being connected');
                $this->email->send();
                $this->email->clear();
            }
        }
    }
}

