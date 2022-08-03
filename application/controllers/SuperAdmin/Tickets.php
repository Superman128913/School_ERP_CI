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
        $this->load->library('layouts');
        $this->layouts->view('SuperAdmin/tickets/main');
	}

    public function getChats($tick_id)
    {
        $chat_list = $this->ModTickets->getChats($tick_id);
        echo json_encode($chat_list);
    }

    public function insertChat()
    {
        $data = $_POST;
        $time = $this->ModTickets->insertChat($data);
        echo json_encode($time);
    }
    
}