<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends CI_Controller {
    
    public function __construct()
    {

        parent::__construct();
        
        $libraries = array('CheckAuth','Phpfunctions','layouts');
        $this->load->library($libraries);
        $this->load->model("ModTickets");
        
    }
    // echo "lk";
    // Main Function
    
	public function index()
	{
        if(isset($_POST['add'])){

            $data = $_POST;
            unset($data['add']);
            $data['sch_id'] = $this->session->userdata['sch_id'];
            $this->ModClasses->AddClass($data);
            redirect("classes");

        }elseif(isset($_POST['AddSec'])){

            $data = $_POST;
            unset($data['AddSec']);

            $this->ModClasses->AddSec($data);

            redirect("classes");
        }else{
            $this->load->library('layouts');
            $ticket_list = $this->ModTickets->getTicketList();
            $context['ticket_list'] = $ticket_list;
            $this->layouts->view('SuperAdmin/tickets/main', $context);
        }
	}
    
}