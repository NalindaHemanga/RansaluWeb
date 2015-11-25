<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Halls extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $sql = "SELECT * FROM reception_hall;";
        $val = $this->db->query($sql);
        $arr['page'] = 'hall';
        $arr['halldata']=$val->result_array();
        $this->load->view('admin/vwManageHall',$arr);
    }

    public function register_user(){
         $salt = '5&JDDlwz%Rwh!t2Yg-Igae@QxPzFTSId';
        $password = $_POST["password"];
        $enc_pass  = md5($salt.$password);

        $data=array(
            "username"=>$_POST['name'],
            "email"=>$_POST['email'],
            "password"=> $enc_pass,
            "block"=>0,
            "user_type"=>$_POST['usertype'],
            "telephone"=>$_POST['telephone'],
            "nic"=>$_POST['nic']
            );

        $arr['page'] = 'user';
        if($this->db->insert('tbl_admin_users', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'A user has been successfully added!';
        }
        else{
            $arr['message_type']='error';
             $arr['message'] = 'User registration unsuccessful';
        
        }

        $this->load->view('admin/vwAddUser',$arr);

    }

    public function add_hall() {
        
        
        $arr['page'] = 'hall';
        $this->load->view('admin/vwAddHall',$arr);
    }

     public function edit_user() {
        $arr['page'] = 'user';
        $this->load->view('admin/vwEditUser',$arr);
    }
    
     public function block_user() {
        // Code goes here
    }
    
     public function delete_user() {
        // Code goes here
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */