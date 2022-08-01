<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $libraries = array('CheckAuth','Phpfunctions','layouts','form_validation');
        $this->load->library($libraries);
    }
    
	public function index()
	{    
        $this->load->library('layouts');
        $this->layouts->set_title('Profile');
        $this->layouts->view('Admin/profile');
        
	}

    public function update() {
            if ($this->input->post('edit_profile')) {
                $this->form_validation->set_rules('use_name', 'use_name', 'required');
                $this->form_validation->set_rules('use_email', 'use_email', 'required');
                $this->form_validation->set_rules('use_username', 'use_username', 'required');


                

            
                
                
           
                 if ($this->form_validation->run() == true) {
                    $id = strip_tags($this->input->post('user_id'));
                    $image = $this->upload_single_file();

                    $data = $this->session->userdata('logged_in');
                    if ($image) {
                       $userData = array(
                        'use_name' => strip_tags($this->input->post('use_name')),
                        'use_email' => strip_tags($this->input->post('use_email')),
                        'use_username' => strip_tags($this->input->post('use_username')),
                        'image' => $image
                    ); 
                        $this->session->set_userdata('use_name',$userData['use_name']);
                        $this->session->set_userdata('use_email',$userData['use_email']);
                        $this->session->set_userdata('use_username',$userData['use_username']);
                        $this->session->set_userdata('image',$userData['image']);
                    } else {
                        $userData = array(
                            'use_name' => strip_tags($this->input->post('use_name')),
                            'use_email' => strip_tags($this->input->post('use_email')),
                            'use_username' => strip_tags($this->input->post('use_username'))
                        );
                        $this->session->set_userdata('use_name',$userData['use_name']);
                        $this->session->set_userdata('use_email',$userData['use_email']);
                        $this->session->set_userdata('use_username',$userData['use_username']);
                    }
                    $this->db->set($userData);
                    $this->db->where('use_id', $id);
                    $this->db->update('hx_users');

                    
                    $this->phpfunctions->notification('success','Successfull','Profile Updated Successfully');
                    return redirect('Admin/Profile');
                } else {
                //load the view
                $this->index();
            }
        }
    }
    
       public function upload_single_file()
        {
                $config['upload_path']          = dirname($_SERVER["SCRIPT_FILENAME"])."/upload_path/profile";
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 90000;
                $config['max_width']            = 9024;
                $config['max_height']           = 9068;
                $config['encrypt_name']         = TRUE;

                $this->load->library('upload', $config);

                    if (!empty($_FILES['userfile']['name']))
                    {

                        if (!$this->upload->do_upload())
                        {
                            
                            exit('Only jpg, png and gif formats are supported.');

                        } else {
                            return $this->upload->data('file_name');
                        }
                    }  else {
                        return false;
                    }


            }
    
}