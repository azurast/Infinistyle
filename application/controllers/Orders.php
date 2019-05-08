<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
      $this->load->model('Order_model');
      $data['title'] = "Order";
      $data['orders'] = $this->Order_model->get_all_order();
      $this->load->view('admin/headerAdmin_view', $data);
      $this->load->view('admin/orderList_view', $data);
      $this->load->view('admin/footerAdmin_view');
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

}
