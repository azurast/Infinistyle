<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_model extends CI_Model {
    public function get_all_admin(){
        $query = "SELECT * FROM admin";
        $result = $this->db->query($query);

        return $result->result_array();
    }
    
    public function display($table,$where){
        return $this->db->get_where($table,$where);
    }

    public function get_admin($data){
        $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function insert_customer($item){
        $this->db->insert('admin',$item);
    }

    public function update_customer($item){
        $this->db->update('admin',$item,"adminID = ".$item["adminID"]);
    }

    public function delete_customer($item){
      $this->db->where('adminID', $item);
      $this->db->delete('admin');
    }

    public function get_item(){
        $query = "SELECT * FROM products";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_customers(){
        $query = "SELECT * FROM customers";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_order(){
        $query = "SELECT * FROM orders";
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function clicked($param){
        $query = "SELECT * FROM ".$param['table']." WHERE ".$param['where']." = '".$param['id']."'";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function update($values, $table){
        if($table == 'products'){
            $sql = $this->db->update($table,$values,"productID = ".$values["productID"]);
        }
        else if($table == 'customers'){
            $sql = $this->db->update($table,$values,"customerID = ".$values["customerID"]);
        }
        else if($table == 'orders'){
            $sql = $this->db->update($table,$values,"orderID = ".$values["orderID"]);
        }
        return $sql;
    }

    public function insert($item){
        $this->db->insert('products',$item);
    }

    public function delete($param){
        $this->db->where($param['where'],$param['id']);
        return $this->db->delete($param['table']);
    }

    public function orderDetails(){
        $sql = "SELECT orderID, productName, qty FROM orderdetails AS d, products AS p WHERE d.productID = p.productID order by orderID";
        $result = $this->db->query($sql);

        return $result->result_array();
    }
}
