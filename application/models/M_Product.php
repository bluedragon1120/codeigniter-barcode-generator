<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model{
 
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function get_all_product(){
        $hasil = $this->db->get('product');
        return $hasil;
    }
     
    function simpan_product($sku_number,$product_name,$product_price,$image_name){
        $data = array(
            'sku_number'    => $sku_number,
            'product_name'  => $product_name,
            'product_price' => $product_price,
            'bar_code'      => $image_name
        );
        $this->db->insert('product',$data);
    }
}