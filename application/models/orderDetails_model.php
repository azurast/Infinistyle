<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderDetails_model extends CI_Model {
    public function get_all_orderDetails(){
        $query = "SELECT * FROM orderdetails";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_orderDetails_per_cartID_view($data){
        $query = 
        "SELECT p.productName as name, 
                p.productImage as image,
                p.productPrice as price,
                cd.qty as quantity 
        FROM shoppingcartdetails as cd 
        JOIN products as p ON (cd.productID = p.productID)
        WHERE cartID =" . "'" . $data['cartID'] . "'";

        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_orderDetails_per_orderID($data){
        $query = 
        "SELECT * FROM orderdetails
        WHERE orderID =" . "'" . $data['orderID'] . "'";

        $result = $this->db->query($query);

        return $result->result_array();
    }


    
    public function insert_orderDetails($data){
        $insert = $this->db->insert('orderdetails',$data);
        $response =  $this->db->error();
        return $response;
    }

    public function update_shoppingCart($item){
        $this->db->update('shoppingcarts',$item,"cartID = ".$item["cartID"]);
    }

    public function delete_shoppingCart($item){
      $this->db->where('cartID', $item['cartID']);
      $this->db->delete('shoppingcarts');
    }
}
?>
