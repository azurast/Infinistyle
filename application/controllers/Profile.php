<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->model('Admin_model');
        $data['title'] = "Admin Profile";
        $this->load->view('admin/headerAdmin_view', $data);
        $this->load->view('admin/adminProfile_view');
        $this->load->view('admin/footerAdmin_view');
    }
    

}
