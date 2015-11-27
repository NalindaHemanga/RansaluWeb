<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Quotation extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        $arr['page'] ='quotation';
        $this->load->view('vwQuotation',$arr);
    }

    public function register_quote(){
        $menu = $_POST['menu'];
        $hall = $_POST['hall'];
        $sql1 = "SELECT price_per_plate FROM menu WHERE m_id =$menu;";
        $sql2 = "SELECT price_per_hour FROM reception_hall WHERE rh_id=$hall;";

        $menu = $this->db->query($sql1);
        $hall = $this->db->query($sql2);

        $data=array(
            "description"=>$_POST['description'],
            "email"=>$_POST['email'],
            "password"=> $enc_pass,
            "block"=>0,
            "user_type"=>$_POST['usertype'],
            "telephone"=>$_POST['telephone'],
            "nic"=>$_POST['nic']
        );

    }

}