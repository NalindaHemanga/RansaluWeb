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
     public function indexUpdate($r_id) {
        $sql = "SELECT * FROM room WHERE r_id=$r_id;";
        $val = $this->db->query($sql);
        $arr['page'] = 'room';
        $arr['roomdata']=$val->result_array();
        $this->load->view('admin/vwEditRoom',$arr);
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

    public function delete_room($r_id) {
        $arr['page'] = 'room';
        
        
        $this->db->where('r_id', $r_id);        
        
        if($this->db->delete('room')){
            $arr['message_type']='success';
            $arr['message'] = 'Room Deleted successfully!';
        }
        else{
            $arr['message_type']='error';
            $arr['message'] = 'Room Deletion unsuccessful';
        
        }
        $this->load->view('admin/vwDeleteRoom',$arr);
    }

     public function update_room($r_id) {
         $data=array(
            "r_no"=>$_POST['r_no'],
           "size"=>$_POST['size'],
           "type"=>$_POST['type'],
           "price"=>$_POST['price']
            );

        $arr['page'] = 'room';
        
        $this->db->where('r_id', $r_id);        
        if($this->db->update('room', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'Room details have been successfully updated!';
        }
        else{
            $arr['message_type']='error';
             $arr['message'] = 'Room details update unsuccessful';
        
        }

        $sql = "SELECT * FROM room WHERE r_id=$r_id;";
        $val = $this->db->query($sql);
        $arr['page'] = 'room';
        $arr['roomdata']=$val->result_array();
        
        $this->load->view('admin/vwEditRoom',$arr);
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