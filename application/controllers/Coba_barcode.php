<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Coba_barcode extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model(array('M_Product'  => 'product'));
        $this->load->library('zend'); //pemanggilan library BAR CODE
    }
 
    function index(){
        $this->load->view('v_barcode');
    }
 
    function create_barcode($kode){
        //kita load library nya ini membaca file Zend.php yang berisi loader
        //untuk file yang ada pada folder Zend
        $this->load->library('zend');

        //load yang ada di folder Zend
        $this->zend->load('Zend/Barcode');

        //generate barcodenya
        //$kode = 12345abc;
        Zend_Barcode::render('code128', 'image', array('text'=>$kode), array());
    }

}