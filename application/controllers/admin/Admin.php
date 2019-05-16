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

}
