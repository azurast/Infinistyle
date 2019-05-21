<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/customer/Cart.php';
class Payment extends Cart{

    public function __construct(){
        parent::__construct();
        $this->load->library('Session');
        $this->load->helper('date');
    }

    public function index(){
        $this->check_is_login('customer');
        $cart['orderID'] = $this->generate_order_id();

        $this->load->model('shoppingCartDetails_model');
        $cart_response = $this->shoppingCartDetails_model->get_shoppingCartDetails_per_cartID($cart);

        $t['res'] = $cart_response;
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['navbar'] = $this->load->view('includes/shop/header_logged', NULL, TRUE);
        $data['cart'] = $this->load->view('includes/user/shoppingCart', $t, TRUE);
        $data['footer'] = $this->load->view('includes/user/footer', NULL, TRUE);
        $data['js'] = $this->load->view('includes/js.php', NULL, TRUE);
        $this->load->view('pages/user/shoppingCart_view.php', $data);
    }

    public function generate_order_id(){
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

        //#4 - generate date with Local Time for orderDate
        $timestamp = now();
        $timezone = 'UP4';
        $daylight_saving = TRUE;
        $gmt_to_local = gmt_to_local($timestamp, $timezone, $daylight_saving);
        $time = unix_to_human($gmt_to_local, TRUE, 'us');

        //#5 - put 'em into order params
        $order_params = array(
          'customerID' => $customer->customerID,
          'orderStatus' => "on process",
          'orderDate' => $time
        );

        // print_r($order_params);


        // #6 - insert param into table Orders, and then get the last orderId we added.
        $this->load->model('order_model');
        $orders_response = $this->order_model->insert_order($order_params);

        // kalo berhasil, orders response berisi
        // Array ( [code] => 0 [message] => )

        
        if($orders_response['code']!= 0) {
          // TODO : add error handling "Failed to checkout. please try again." atau semacamnya
        }

        $orderID = $this->db->insert_id();
        
        return $orderID;
      }
    }

    public function add_cart_to_order_details(){

      //YANG DILAKUIN : 
      // >> cari cartIdnya dulu
      // >> dapetin cartdetails yang mau ditambahin ke order details
      // >> generate orderid
      // >> insert orderdetails berdasarkan yg didapat dari cartdetails
      // >> kalo berhasil, delete cartdetails


      $cart['cartID'] = $this->get_cart_id();

      $this->load->model('shoppingCartDetails_model');
      $cart_details_response = $this->shoppingCartDetails_model->get_shoppingCartDetails_per_cartID($cart);
      
      $orderID = $this->generate_order_id();
      
      //ERROR HANDLING KALO ORDERID GAGAL DIGENERATE
      if($orderID == false){
          $error = array(
              "code" => 2024,
              "message" => "OrderID not found. Please try again."
          );
          return  $error;
      }

      $order_details_count = 0;
      $this->load->model('product_model');
      foreach($cart_details_response as $product){
        $price_response = $this->product_model->get_product_price($product['productID']);
       
        $data = array(
          "orderID" => $orderID,
          "productID" => $product['productID'],
          "qty" => $product['qty'],
          "price" => $price_response->price,
        );
        $this->load->model('OrderDetails_model');
        $result = $this->OrderDetails_model->insert_orderDetails($data);
        if($result['code'] == 0){ // RESULT OK
          $order_details_count++;
          //delete from cart detail.
          $delete_params = array(
            "cartID" => $cart['cartID'],
            "productID" => $product['productID'],
          );
          $this->shoppingCartDetails_model->delete_shoppingCartDetail($delete_params);
        }
        else {
            //TODO : ganti error handling nya jadi lebih proper
            //ambil nama barang
            echo 'adding __productName__ to checkout fails!';
        }        
      }

      if($order_details_count == count($cart_details_response)){
        // TODO : send response berhasil
        $response = array(
          "code" => 200,
          "message" => "Checkout telah Berhasil!"
        );
      }
      else {
        $response = array(
          "code" => 400,
          "message" => "terjadi kesalahan ketika melakukan checkout barang"
        );
      }  
    }
}

 ?>
