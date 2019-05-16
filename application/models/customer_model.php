<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {
    public function get_all_customer(){
        $query = "SELECT * FROM customers";
        $result = $this->db->query($query);

        return $result->result_array();
    }
    
    public function get_customer($data){
        $condition = "username =" . "'" . $data['username'] . "'";
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where($condition);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } 
        else {
            return $query->result_array();
        }
    }

    public function insert_customer($data){
        print_r($this->db->insert('customers',$data));

    }

    public function update_customer($data){
        $this->db->update('customers',$data,"customerID = ".$data["customerID"]);
    }

    public function delete_customer($data){
      $this->db->where('customerID', $data);
      $this->db->delete('customers');
    }
}
