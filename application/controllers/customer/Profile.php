<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/user/Login.php';

class Profile extends Login{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->check_is_login('customer');
        $this->load->model('Customer_model');
        //$t['title'] = "Profile";

        /*buat display data customer dari mysql ke profile */
        $session = $this->session->userdata('logged_in_infinistyle');
        $where = array('username'=>$session['username']);
        $t['customer'] = $this->Customer_model->display('customers',$where)->result();

        $currentcustomer = $this->Customer_model->display('customers',$where)->result();
        $t['orders'] = $this->Customer_model->get_order_history($currentcustomer[0]->customerID);

        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('includes/user/navbar', NULL, TRUE);
        $data['header'] = $this->load->view('includes/user/header', NULL, TRUE);
        $data['profile'] = $this->load->view('includes/user/profile', $t, TRUE);
        $data['footer'] = $this->load->view('includes/user/footer', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/user/customerProfile_view.php', $data);

    }

}

 ?>
