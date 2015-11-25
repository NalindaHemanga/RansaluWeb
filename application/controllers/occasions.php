<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class occasions extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $arr['page'] ='occasions';
        $this->load->view('vwOccasions',$arr);
    }

}