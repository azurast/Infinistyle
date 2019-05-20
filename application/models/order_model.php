<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {
    public function get_all_order(){
        $query = "SELECT * FROM orders";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_five_order(){
        $query = "SELECT * FROM orders ORDER BY orderId LIMIT 5";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function insert_order($item){
        $this->db->insert('orders',$item);
    }

    public function update_order($item){
        $this->db->update('orders',$item,"orderID = ".$item["OrderID"]);
    }

    public function update($values, $table)
    {
        $sql = $this->db->update($table,$values,"orderID = ".$values["orderID"]);
        return $sql;
    }

    public function delete_order($item){
      $this->db->where('orderID', $item);
      $this->db->delete('orders');
    }

    public function orderDetails(){
        $sql = "SELECT orderID, productName, qty FROM orderdetails AS d, products AS p WHERE d.productID = p.productID order by orderID";
        $result = $this->db->query($sql);

        return $result->result_array();
    }
}
