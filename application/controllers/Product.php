<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model(array('M_Product'  => 'product'));
    }
 
    function index(){
        $data['data']=$this->product->get_all_product();
        $this->load->view('v_product',$data);
    }
 
    function simpan(){
        $sku_number     = $this->input->post('sku_number');
        $product_name   = $this->input->post('product_name');
        $product_price  = $this->input->post('product_price');
 
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
        $image_resource = Zend_Barcode::factory('code128', 'image', array('text'=>$sku_number), array())->draw();
        $image_name     = $sku_number.'.jpg';
        $image_dir      = './assets/images/'; // penyimpanan file barcode
        imagejpeg($image_resource, $image_dir.$image_name); 

        $data=array(
            'sku_number'    => $this->input->post('sku_number'),
            'product_name'  => $this->input->post('product_name'),
            'product_price' => $this->input->post('product_price'),
            'bar_code'      => $image_name
        );
        $this->product->simpan_product($sku_number,$product_name,$product_price,$image_name); //simpan ke database
        redirect('product'); //redirect ke product usai simpan data
    }
    
}