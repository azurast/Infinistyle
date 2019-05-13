<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/user/Login.php';

class Customers extends Login {

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
      $this->load->model('Customer_model');
      
      $this->check_is_login('admin');
      
      $dt['customer'] = $this->Customer_model->get_all_customer();
      $dt['title'] = "Customers";
      $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
      $data['js'] =  $this->load->view('includes/js.php', NULL, TRUE);
      $data['sidenav'] = $this->load->view('includes/admin/sidenav',NULL,TRUE);
      $data['title'] = $this->load->view('includes/title',$dt,TRUE);
      $data['header'] = $this->load->view('includes/admin/header', NULL ,TRUE);
      $data['customers'] = $this->load->view('includes/admin/customers', NULL, TRUE);
      $data['footer'] = $this->load->view('includes/admin/footer', NULL, TRUE);
      $this->load->view('pages/admin/customers_view', $data);    
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

    public function edit($item){
        //$data['edit'] = $this->Admin_model->clicked_item($item);
        $this->load->view('admin/headerAdmin_view');
        //$this->load->view('admin/editProduct_view', $data);
        $this->load->view('admin/footerAdmin_view');
    }

    public function edit_action(){
        $values = [
            "ProductID" => $this->input->post('product_id'),
            "ProductName" => $this->input->post('product_name'),
            "UnitsInStock" => $this->input->post('stock'),
            "UnitPrice" => $this->input->post('price')
        ];

        $this->Admin_model->update($values);
        redirect("admin/items");
    }

}
