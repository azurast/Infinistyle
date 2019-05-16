<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/user/Login.php';

class Profile extends Login {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->check_is_login('admin');
        $this->load->model('Admin_model');
        $t['title'] = "Profile";
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['js'] =  $this->load->view('includes/js.php', NULL, TRUE);
        $data['sidenav'] = $this->load->view('includes/admin/sidenav',NULL,TRUE);
        $data['title'] = $this->load->view('includes/title',$t,TRUE);
        $data['header'] = $this->load->view('includes/admin/headerProfile',NULL,TRUE);
        $data['profile'] = $this->load->view('includes/admin/profile', NULL, TRUE);
        $data['footer'] = $this->load->view('includes/admin/footer', NULL, TRUE);
        $this->load->view('pages/admin/profile_view', $data);
    }


}
