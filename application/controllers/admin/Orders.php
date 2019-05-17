<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/user/Login.php';

class Orders extends Login {

    public function __construct(){
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function index(){
        $this->load->model('Order_model');

        $this->check_is_login('admin');
        
        $dt['title'] = "Orders";
        $dt['orders'] = $this->Order_model->get_all_order();
        $dt['orderDetails'] = $this->Order_model->orderDetails();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['js'] =  $this->load->view('includes/js.php', NULL, TRUE);
        $data['sidenav'] = $this->load->view('includes/admin/sidenav',NULL,TRUE);
        $data['title'] = $this->load->view('includes/title',$dt,TRUE);
        $data['header'] = $this->load->view('includes/admin/header',NULL,TRUE);
        $data['orders'] = $this->load->view('includes/admin/orders', $dt, TRUE);
        $data['footer'] = $this->load->view('includes/admin/footer', NULL, TRUE);
        $this->load->view('pages/admin/orders_view', $data);
    }

    public function update_order(){
      // $values = [
      //   "ProductID" => $this->input->post('product_id'),
      //   "ProductName" => $this->input->post('product_name'),
      //   "UnitsInStock" => $this->input->post('stock'),
      //   "UnitPrice" => $this->input->post('price')
      // ];

      // $this->Product_model->update($values);
      redirect("admin/orders");
    }

    public function delete_order(){
      // $values = [
      //   "ProductID" => $this->input->post('product_id'),
      //   "ProductName" => $this->input->post('product_name'),
      //   "UnitsInStock" => $this->input->post('stock'),
      //   "UnitPrice" => $this->input->post('price')
      // ];

      // $this->Product_model->update($values);
      redirect("admin/orders");
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

        $result = $this->Order_model->update($values, $_POST['title']);
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
