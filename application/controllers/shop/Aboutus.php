<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    Class Aboutus extends CI_Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
            $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
            $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
            $data['us'] = $this->load->view('includes/shop/aboutus.php', NULL, TRUE);
            $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
            $this->load->view('pages/shop/aboutUs_view', $data);
        }


    }

?>
