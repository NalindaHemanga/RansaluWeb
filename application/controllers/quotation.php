<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Quotation extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $arr['page'] ='quotation';
        $this->load->view('vwQuotation',$arr);
    }

}