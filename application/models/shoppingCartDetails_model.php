<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingCartDetails_model extends CI_Model {
    public function get_all_shoppingCartDetails(){
        $query = "SELECT * FROM shoppingcartdetails";
        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_shoppingCartDetails_per_cartID_view($data){
        $query = 
        "SELECT 
                cd.cartID as cartID,
                cd.productID as productID,
                p.productName as name, 
                p.productImage as image,
                p.productPrice as price,
                cd.qty as quantity 
        FROM shoppingcartdetails as cd 
        JOIN products as p ON (cd.productID = p.productID)
        WHERE cartID =" . "'" . $data['cartID'] . "'";

        $result = $this->db->query($query);

        return $result->result_array();
    }

    public function get_shoppingCartDetails_per_cartID($data){
        $query = 
        "SELECT * FROM shoppingcartdetails
        WHERE cartID =" . "'" . $data['cartID'] . "'";

        $result = $this->db->query($query);

        return $result->result_array();
    }


    
    public function insert_shoppingCartDetails($data){
        $insert = $this->db->insert('shoppingcartdetails',$data);
        $response =  $this->db->error();
        return $response;
    }

    public function update_shoppingCart($item){
        $this->db->update('shoppingcarts',$item,"cartID = ".$item["cartID"]);
    }

    public function delete_shoppingCartDetail($data){
        $this->db->delete('shoppingcartdetails', array(
            'cartID' => $data['cartID'],
            'productID'=> $data['productID']
        ));
        return $this->db->error();
    }
}
?>
