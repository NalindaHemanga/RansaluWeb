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

    public function indexUpdate($rh_id) {
        $sql = "SELECT * FROM reception_hall WHERE rh_id=$rh_id;";
        $val = $this->db->query($sql);
        $arr['page'] = 'hall';
        $arr['halldata']=$val->result_array();
        $this->load->view('admin/vwEditHalls',$arr);
    }

    public function register_hall(){
       

        $data=array(
           "rh_name"=>$_POST['rh_name'],
           "max_capacity"=>$_POST['max_capacity'],
           "price_per_hour"=>$_POST['price_per_hour']
            );

        $arr['page'] = 'hall';
        if($this->db->insert('reception_hall', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'A Reception Hall has been successfully added!';
        }
        else{
            $arr['message_type']='error';
             $arr['message'] = 'Reception Hall registration unsuccessful';
        
        }

        $this->load->view('admin/vwAddHall',$arr);

    }

    public function add_hall() {
        
        
        $arr['page'] = 'hall';
        $this->load->view('admin/vwAddHall',$arr);
    }

    public function update_hall($rh_id) {
         $data=array(
            "rh_name"=>$_POST['rh_name'],
           "max_capacity"=>$_POST['max_capacity'],
           "price_per_hour"=>$_POST['price_per_hour']
            );

        $arr['page'] = 'hall';
        
        $this->db->where('rh_id', $rh_id);        
        if($this->db->update('reception_hall', $data)){
            $arr['message_type']='success';
            $arr['message'] = 'Hall details have been successfully updated!';
        }
        else{
            $arr['message_type']='error';
             $arr['message'] = 'Hall details update unsuccessful';
        
        }

        $sql = "SELECT * FROM reception_hall WHERE rh_id=$rh_id;";
        $val = $this->db->query($sql);
        $arr['page'] = 'hall';
        $arr['halldata']=$val->result_array();
        
        $this->load->view('admin/vwEditHalls',$arr);
    }

    public function delete_hall($rh_id) {
        $arr['page'] = 'hall';
        
        
        $this->db->where('rh_id', $rh_id);        
        
        if($this->db->delete('reception_hall')){
            $arr['message_type']='success';
            $arr['message'] = 'Hall Deleted successfully!';
        }
        else{
            $arr['message_type']='error';
            $arr['message'] = 'Hall Deletion unsuccessful';
        
        }
        $this->load->view('admin/vwDeleteHall',$arr);
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