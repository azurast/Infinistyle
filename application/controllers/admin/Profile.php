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

        /*buat display data admin dari mysql ke profile */
        $session = $this->session->userdata('logged_in_infinistyle');
        $where = array('username'=>$session['username']);
        $t['admin'] = $this->Admin_model->display('admin',$where)->result();

        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['js'] =  $this->load->view('includes/js.php', NULL, TRUE);
        $data['sidenav'] = $this->load->view('includes/admin/sidenav',NULL,TRUE);
        $data['title'] = $this->load->view('includes/title',$t,TRUE);
        $data['header'] = $this->load->view('includes/admin/headerProfile', $t,TRUE);
        $data['profile'] = $this->load->view('includes/admin/profile', $t, TRUE);
        $data['footer'] = $this->load->view('includes/admin/footer', NULL, TRUE);
        $this->load->view('pages/admin/profile_view', $data);
    }


}
