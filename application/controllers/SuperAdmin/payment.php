<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {
    
    public function __construct()
    {

        parent::__construct();
        
        $libraries = array('CheckAuth','Phpfunctions','layouts');
        $this->load->library($libraries);
        $this->load->model("ModPayment");
        
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
            $this->layouts->view('SuperAdmin/payment/main');
        }
        
	}

    public function edit(){
        
        if(isset($_POST['update'])){

            $data = $_POST;

            $payment_data = array(
                'sch_id' => intval($data['sch_id']),
                'sch_pay_actual' => floatval($data['sch_pay_actual']),
                'sch_pay_paid' => floatval($data['sch_pay_paid']),    
                'sch_pay_pending' => floatval($data['sch_pay_pending'])
            );
            
            $this->ModPayment->UpdatePayment($payment_data);

            redirect("payment");
        }else{

            $this->load->library('layouts');
            $this->layouts->view('SuperAdmin/payment/edit');

        }

    }    
}