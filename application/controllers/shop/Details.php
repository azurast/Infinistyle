<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index(){

        $id = $this->input->get('id');
        $where = array('productID'=>$id);
        $details['product'] = $this->product_model->display('products',$where)->result();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        if(isset($this->session->userdata['logged_in_infinistyle'])){
            $data['header'] = $this->load->view('includes/shop/header_collections_logged.php', NULL, TRUE);
        }else{
            $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
        }
        $data['details'] = $this->load->view('includes/shop/details.php', $details, TRUE);
        $data['footer'] = $this->load->view('includes/shop/footer.php', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/shop/productDetails_view.php', $data);
    }

}

?>
