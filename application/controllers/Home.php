<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('product_model');
    }
    
    public function index(){
        $data['result'] = $this->product_model->get_product();
        $this->load->view('includes/css.php');
        $this->load->view('includes/header_view.php');
        $this->load->view('includes/content.php', $data);
        $this->load->view('includes/footer_view.php');
        $this->load->view('includes/js.php');
    }
}
?>
