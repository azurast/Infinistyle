<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/user/Login.php';

class Dashboard extends Login {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('Admin_model');

        $this->check_is_login('admin');
        
        $params= $this->session->flashdata('admin_param');
        $data["message"] = $params != false ? $params : null;
        
        $dt['title'] = "Dashboard";
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['js'] =  $this->load->view('includes/js.php', NULL, TRUE);
        $data['sidenav'] = $this->load->view('includes/admin/sidenav',NULL,TRUE);
        $data['title'] = $this->load->view('includes/title',$dt,TRUE);
        $data['header'] = $this->load->view('includes/admin/header',NULL,TRUE);
        $data['dashboard'] = $this->load->view('includes/admin/dashboard', NULL, TRUE);
        $data['footer'] = $this->load->view('includes/admin/footer', NULL, TRUE);
        $this->load->view('pages/admin/dashboard_view', $data);
    }

}
