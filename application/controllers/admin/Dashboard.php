<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->model('Admin_model');
        $data["title"] = "Dashboard";
        $this->load->view('admin/headerAdmin_view',$data);
        $this->load->view('admin/adminDashboard_view');
        $this->load->view('admin/footerAdmin_view');
    }
    
}
