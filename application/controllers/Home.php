<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

        /*Initialize products in the cards*/
        public function __construct(){
            parent::__construct();
            $this->load->model('product_model');
        }

        /*Landing home page*/
        public function index(){
            $card['result'] = $this->product_model->get_all_product();
            $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
            $data['header'] = $this->load->view('includes/header_view.php', NULL, TRUE);
            $data['content'] = $this->load->view('includes/content.php', $card, TRUE);
            $data['footer'] = $this->load->view('includes/footer_view.php', NULL, TRUE);
            $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
            $this->load->view('pages/homePage_view.php', $data);
        }

        /*Sign In*/
        public function sign_in(){
            $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
            $data['login'] = $this->load->view('includes/login.php', NULL, TRUE);
            $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
            $this->load->view('pages/signIn_view.php', $data);
        }

        /*Sign Up*/
        public function sign_up(){
            $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
            $data['register'] = $this->load->view('includes/register.php', NULL, TRUE);
            $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
            $this->load->view('pages/signUp_view.php', $data);
        }

        /*Product Details*/
        public function product_details(){
            $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
            $data['header'] = $this->load->view('includes/header_view.php', NULL, TRUE);
            $data['details'] = $this->load->view('includes/details.php', NULL, TRUE);
            $data['footer'] = $this->load->view('includes/footer_view.php', NULL, TRUE);
            $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
            $this->load->view('pages/productDetails_view.php', $data);
        }
    }
}
?>
