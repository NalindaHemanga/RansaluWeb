<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class menu extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $arr['page'] = 'menu';
        $this->load->view('vwMenu', $arr);
    }
}