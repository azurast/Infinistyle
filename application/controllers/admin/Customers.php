<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
      $this->load->model('Customer_model');
      $data['title'] = "Customers";
      $data['customer'] = $this->Customer_model->get_all_customer();
      $this->load->view('admin/headerAdmin_view', $data);
      $this->load->view('admin/customerList_view', $data);
      $this->load->view('admin/footerAdmin_view');
    }

    public function update_customer(){
      // $values = [
      //   "ProductID" => $this->input->post('product_id'),
      //   "ProductName" => $this->input->post('product_name'),
      //   "UnitsInStock" => $this->input->post('stock'),
      //   "UnitPrice" => $this->input->post('price')
      // ];

      // $this->Product_model->update($values);
      redirect("admin/customers");
    }

    public function delete_customer(){
      // $values = [
      //   "ProductID" => $this->input->post('product_id'),
      //   "ProductName" => $this->input->post('product_name'),
      //   "UnitsInStock" => $this->input->post('stock'),
      //   "UnitPrice" => $this->input->post('price')
      // ];

      // $this->Product_model->update($values);
      redirect("admin/customers");
    }

}
