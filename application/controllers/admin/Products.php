<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
      $this->load->model('Product_model');
      $data['title'] = "Products";
      $data['items'] = $this->Product_model->get_all_product();
      $this->load->view('admin/headerAdmin_view', $data);
      $this->load->view('admin/itemList_view', $data);
      $this->load->view('admin/footerAdmin_view');
    }

    public function update_product(){
      // $values = [
      //   "ProductID" => $this->input->post('product_id'),
      //   "ProductName" => $this->input->post('product_name'),
      //   "UnitsInStock" => $this->input->post('stock'),
      //   "UnitPrice" => $this->input->post('price')
      // ];

      // $this->Product_model->update($values);
      redirect("admin/products");
    }
    

}
