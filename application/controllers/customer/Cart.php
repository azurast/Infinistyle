<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/user/Login.php';
class Cart extends Login{

    public function __construct(){
        parent::__construct();
        $this->load->library('Session');
    }

    public function index(){
        $this->check_is_login('customer');
        $cart['cartID'] = $this->get_cart_id();

        $response = $this->session->flashdata('cart_response');
        $data['response'] = $response != false ? $response : null; 
    
        $this->load->model('shoppingCartDetails_model');
        $cart_response = $this->shoppingCartDetails_model->get_shoppingCartDetails_per_cartID_view($cart);

        $t['res'] = $cart_response;
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        if(isset($this->session->userdata['logged_in_infinistyle'])){
            $data['header'] = $this->load->view('includes/shop/header_collections_logged.php', NULL, TRUE);
        }else{
            $data['header'] = $this->load->view('includes/shop/header.php', NULL, TRUE);
        }
        $data['cart'] = $this->load->view('includes/user/shoppingCart', $t, TRUE);
        // $data['footer'] = $this->load->view('includes/user/footer', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/user/shoppingCart_view.php', $data);
    }

    public function get_cart_id(){
        if((isset($this->session->userdata['logged_in_infinistyle']))){

            //#1 - get username from session
            $user =  $this->session->userdata['logged_in_infinistyle'];

            //#2 - use the username data to get customerID
            $this->load->model('Customer_model');
            $customer = $this->Customer_model->get_customer($user);

            //#3 - if customer not exist, return false.
            if($customer == false){
                return $customer;
            }

            //#4 - use customerID as a params for checking is cart for this customer is already exist
            $cart_params['customerID'] = $customer->customerID;

            $this->load->model('shoppingCart_model');
            $cart_response = $this->shoppingCart_model->get_shoppingCart($cart_params);

            //if cart already exist
            if($cart_response != false){
                // echo "cart already exist for user " . $customer->customerID;
                return $cart_response->cartID;
                // print_r($cart_response);  //stdClass Object ( [cartID] => 1 [customerID] => 5 )
            }
            else{
                // echo "making a new cart for user" . $customer->customerID;
                $cart_response = $this->shoppingCart_model->insert_shoppingCart($cart_params);
                // ADD ERROR HANDLING !!
                // print_r($cart_response);

                return $this->db->insert_id();
            }
        }
    }

    public function add_product_to_cart(){

        $this->form_validation->set_rules('productID', 'productID', 'trim|required');
        $this->form_validation->set_rules('quantity', 'quantity', 'trim|required');

        if(isset($this->session->userdata['logged_in_infinistyle'])){
            $data['header'] = $this->load->view('includes/shop/header_collections_logged.php', NULL, TRUE);
            if ($this->form_validation->run() == FALSE) {
                // TODO
            }
            else {
                $cartID = $this->get_cart_id();

                if($cartID == false){
                    $error = array(
                        "code" => 2024,
                        "message" => "Cart tidak ditemukan."
                    );
                    $this->session->set_flashdata('cart_response', $error);
                     redirect('customer/cart');
                }

                $add_cart_detail_params = array(
                    "cartID" => $cartID,
                    "productID" => $this->input->post('productID'),
                    "qty" => $this->input->post('quantity')
                );

                $this->load->model('ShoppingCartDetails_model');

                $result = $this->ShoppingCartDetails_model->insert_shoppingCartDetails($add_cart_detail_params);

                if($result['code'] == 0){ // RESULT OK
                    $response = array(
                        "code" => 200,
                        "message" => "Add product to cart success!"
                    );
                }
                else {
                    $response = array(
                        "code" => 400,
                        "message" => "Failed add product to cart. Please try again."
                    );
                }
                $this->session->set_flashdata('cart_response', $response);
                redirect('customer/cart');
            }
        }
        else{
            $this->session->set_flashdata('loginPage_param', 'Silahkan login terlebih dahulu');
            redirect('user/login');
        }
    }

    public function delete_cart_detail(){
        $this->form_validation->set_rules('cartID', 'cartID', 'trim|required');
        $this->form_validation->set_rules('productID', 'productID', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            // TODO error handling,
            $error = array(
                "code" => 400,
                "message" => "Failed delete product to cart. Please try again."
            );
            $this->session->set_flashdata('cart_response', $error);
            redirect('customer/cart');
        }
        else {
            $delete_params = array(
                "cartID" => $this->input->post('cartID'),
                "productID" => $this->input->post('productID'),
            );
            
            $this->load->model('shoppingCartDetails_model');
            $result = $this->shoppingCartDetails_model->delete_shoppingCartDetail($delete_params);
            
            if($result['code'] == 0){
                $response = array(
                    code => 200,
                    message => "Delete products success!"
                );
            }
            else{
                $response = array(
                    code => 400,
                    message => "Delete products failed. Please try again."
                );
            }
            $this->session->set_flashdata('cart_response', $response);
            redirect('customer/cart');
        }
    }
}

?>
