<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/user/Login.php';
class Cart extends Login{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        //$this->load->model('Customer_model')
        $this->check_is_login('customer');
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('includes/user/navbar', NULL, TRUE);
        $data['cart'] = $this->load->view('includes/user/shoppingCart', NULL, TRUE);
        $data['footer'] = $this->load->view('includes/user/footer', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/user/shoppingCart_view.php', $data);

    }

}

 ?>
