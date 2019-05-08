<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/user/Login.php';

class Products extends Login {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('Product_model');

        $this->check_is_login('admin');
        
        $dt['title'] = "Products";
        $dt['items'] = $this->Product_model->get_all_product();
        $data['css'] = $this->load->view('includes/css.php', NULL, TRUE);
        $data['js'] =  $this->load->view('includes/js.php', NULL, TRUE);
        $data['sidenav'] = $this->load->view('includes/admin/sidenav',NULL,TRUE);
        $data['title'] = $this->load->view('includes/title',$dt,TRUE);
        $data['header'] = $this->load->view('includes/admin/header',NULL,TRUE);
        $data['products'] = $this->load->view('includes/admin/products', $dt, TRUE);
        $data['footer'] = $this->load->view('includes/admin/footer', NULL, TRUE);
        $this->load->view('pages/admin/products_view', $data);
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

    public function edit($item){
        //$data['edit'] = $this->Admin_model->clicked_item($item);
        $this->load->view('admin/headerAdmin_view');
        //$this->load->view('admin/editProduct_view', $data);
        $this->load->view('admin/footerAdmin_view');
    }

    public function add(){
        $this->load->view('admin/headerAdmin_view');
        //$this->load->view('admin/addProduct_view');
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

    public function add_action(){
        $values = [
            "ProductID" => '',
            "ProductName" => $this->input->post('product_name'),
            "UnitsInStock" => $this->input->post('stock'),
            "UnitPrice" => $this->input->post('price')
        ];

        $this->Admin_model->insert($values);
        redirect("admin/items");
    }

    public function upload(){
        //taro di __construct
        $this->load->helper(array('form','url'));

        //taro di index, buat load views yg bakal digunakan kalau upload file sukses/fail
        $this->load->view('v_upload', array('error' => ' '));

        //konfigurasi limitasi file yg boleh di upload
        $config['upload_path'] ='./images/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 0;
        $config['max_width'] = 0;
        $config['max_height'] = 0;

        //kirim aturan ini ke libraray upload
        $this->load->library('upload', $config);

        //productImage sama dengan name pada <input name="productImage"> di view
        //kalau upload sukses
        if(!$this->upload->do_upload('productImage')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('v_upload', $error);
        }
        //kalau upload gagal
        else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('v_upload_success', $data);
        }
    }
}
