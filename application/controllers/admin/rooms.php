<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rooms extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $sql = "SELECT * FROM room;";
        $val = $this->db->query($sql);
        $arr['page'] = 'room';
        $arr['roomdata']=$val->result_array();
        $this->load->view('admin/vwManageRoom',$arr);
    }

    public function register_room(){
       

        $data=array(
           "r_no"=>$_POST['r_no'],
           "size"=>$_POST['size'],
           "type"=>$_POST['type'],
           "price"=>$_POST['price']
            );

        $arr['page'] = 'room';
        if($this->db->insert('room', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'A Room has been successfully added!';
        }
        else{
            $arr['message_type']='error';
             $arr['message'] = 'Room registration unsuccessful';
        
        }

        $this->load->view('admin/vwAddRoom',$arr);

    }

    public function add_room() {
        
        
        $arr['page'] = 'room';
        $this->load->view('admin/vwAddRoom',$arr);
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