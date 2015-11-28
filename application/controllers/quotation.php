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
        $duration = $_POST['e_time'] - $_POST['s_time'];

        $data=array(
            "name"=>$_POST['name'],
            "email"=>$_POST['email'],
            "telephone"=>$_POST['telephone'],
            "nic"=>$_POST['nic'],
            "date"=>$_POST['date'],
            "duration"=> $duration,
            "head_count"=>$_POST['guest'],
            "description"=>$_POST['description'],
            "m_id" => $_POST['menu'],
            "rh_id" => $_POST['hall'],
            "total" => ($menu * $_POST['guest']) + ($duration * $hall)

        );

        $arr['page'] = 'user';

        if($this->db->insert('quotation', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'User details have been successfully updated!';
        }
        else{
            $arr['message_type']='error';
            $arr['message'] = 'User update unsuccessful';

        }

    }

}