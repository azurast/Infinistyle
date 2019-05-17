<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * ADMIN PRIVILEGES :
 * get
 *  products (all / unit)
 *  customers (all / unit)
 *  orders  (all / unit)
 *  order with its details (orderdetails)  (all / unit)
 *  shoppingcarts (all / unit)
 *  shoppingcart with its details (shoppingcartdetails)  (all / unit)
 *  admin profile(all / unit) ?not sure
 *
 * insert
 *  products
 *
 * update
 *  products
 *  orders
 *
 * */

/* *
 * HOW TO ADD RELATIONAL TABLE (LIKE ORDERS & SHOPPINGCARTS)
 * -> insert data ke table orders | shoppingcarts.
 * -> get id of the latest orders | shoppingcarts update (using $db->insert_id; , src : https://www.w3schools.com/php/php_mysql_insert_lastid.asp)
 * -> insert datadetail + xxxId into xxxdetails.
 *
 * just my initial idea. Hope it werks!
 * */
class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index(){
        $this->load->model('Admin_model');
        $t['title'] = "Dashboard";
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['js'] =  $this->load->view('includes/js.php', NULL, TRUE);
        $data['sidenav'] = $this->load->view('includes/admin/sidenav',NULL,TRUE);
        $data['title'] = $this->load->view('includes/title',$t,TRUE);
        $data['header'] = $this->load->view('includes/admin/header',NULL,TRUE);
        $data['dashboard'] = $this->load->view('includes/admin/dashboard', NULL, TRUE);
        $data['footer'] = $this->load->view('includes/admin/footer', NULL, TRUE);
        $this->load->view('pages/admin/dashboard_view', $data);
    }

    public function profile(){
        $data['title'] = "Admin Profile";
        $this->load->view('admin/headerAdmin_view', $data);
        $this->load->view('admin/adminProfile_view');
        $this->load->view('admin/footerAdmin_view');
    }

    public function orders(){
        $data['title'] = "Orders";
        $data['orders'] = $this->Admin_model->get_order();
        $data['orderDetails'] = $this->Admin_model->orderDetails();
        $this->load->view('admin/headerAdmin_view', $data);
        $this->load->view('admin/orderList_view', $data);
        $this->load->view('admin/footerAdmin_view');
   }
    public function items(){
        $data['title'] = "Items";
        $data['items'] = $this->Admin_model->get_item();
        $this->load->view('admin/headerAdmin_view', $data);
        $this->load->view('admin/itemList_view', $data);
        $this->load->view('admin/footerAdmin_view');
    }

   

   public function customers(){
        $data['title'] = "Customers";
        $data['customer'] = $this->Admin_model->get_customers();
        $this->load->view('admin/headerAdmin_view', $data);
        $this->load->view('admin/customerList_view', $data);
        $this->load->view('admin/footerAdmin_view');
   }

    public function edit(){

        $param = [
            "table" => $_POST['q'],
            "where" => $_POST['where'],
            "id" => $_POST['id']
        ];

        $data['result'] = $this->Admin_model->clicked($param);
        echo json_encode($data['result']);
    }

    public function edit_action(){
        if($_POST['title'] == "products"){
            $values = [
                "productID" => $_POST['id'],
                "productName" => $_POST['name'],
                "productPrice" => $_POST['price'],
                "productCategory" => $_POST['category'],
                "productStock" => $_POST['stock'],
                "productDescription" => $_POST['desc'],
                "productImage" => $_POST['image']
            ];
        }
        else if($_POST['title'] == "customers"){
            $values = [
                "customerID" => $_POST['customerID'],
                "fullName" => $_POST['fullName'],
                "email" => $_POST['email'],
                "address" => $_POST['address'],
                "phone" => $_POST['phone'],
                "username" => $_POST['username'],
                "password" => $_POST['password']
            ];
        }
        else if($_POST['title'] == "orders"){
            $values = [
                "orderStatus" => $_POST['status'],
                "orderID" => $_POST['orderID']
            ];
        }

        $result = $this->Admin_model->update($values, $_POST['title']);
        if($result == 1){
            echo json_encode($values);
        }
    }

    public function delete(){
        echo $_POST['id'];
    }

    public function delete_action(){
        $param = [
            "table" => $_POST['q'],
            "where" => $_POST['where'],
            "id" => $_POST['id']
        ];

        $query = $this->Admin_model->delete($param);

        return $query;
    }

    public function add_action(){
        $values = [
            "productID" => $_POST['id'],
            "productName" => $_POST['name'],
            "productDescription" => $_POST['desc'],
            "productPrice" => $_POST['price'],
            "productStock" => $_POST['stock'],
            "productCategory" => $_POST['category'],
            "productImage" => $_POST['image']
        ];

        $result = $this->Admin_model->insert($values);
        echo $result;
    }
}
