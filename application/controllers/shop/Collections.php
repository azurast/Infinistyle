<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collections extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('Session');
        $this->load->model('product_model');
    }

    public function index(){
        $this->load_collections_view();
    }
    
    public function load_collections_view(){
        $this->load->model('Customer_model');
        $this->load->model('product_model');
        $params = $this->session->flashdata('collections_param');
        $data['message'] = $params != false ? $params : null; 
        $card['result'] = $this->product_model->get_all_product();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        if($this->session->userdata['logged_in_infinistyle']){
            $data['header'] = $this->load->view('includes/shop/header_collections_logged.php', NULL, TRUE);
        }else{
            $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
        }
        $data['content'] = $this->load->view('includes/shop/content.php', $card, TRUE);
        $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/shop/homePage_view.php', $data);
    }

    public function tops(){
        $card['result'] = $this->product_model->get_tops();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
        $data['content'] = $this->load->view('includes/shop/content.php', $card, TRUE);
        $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/shop/homePage_view.php', $data);
    }

    public function bottoms(){
        $card['result'] = $this->product_model->get_bottoms();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
        $data['content'] = $this->load->view('includes/shop/content.php', $card, TRUE);
        $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/shop/homePage_view.php', $data);
    }

    public function dress(){
        $card['result'] = $this->product_model->get_dress();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
        $data['content'] = $this->load->view('includes/shop/content.php', $card, TRUE);
        $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/shop/homePage_view.php', $data);
    }

    public function jumpsuit(){
        $card['result'] = $this->product_model->get_jumpsuit();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
        $data['content'] = $this->load->view('includes/shop/content.php', $card, TRUE);
        $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/shop/homePage_view.php', $data);
    }

    public function accesories(){
        $card['result'] = $this->product_model->get_accesories();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
        $data['content'] = $this->load->view('includes/shop/content.php', $card, TRUE);
        $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/shop/homePage_view.php', $data);
    }
}

?>
