<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/18/2017
 * Time: 10:30 PM
 */
class Fees extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('private/fees/header');
        $this->load->view('private/fees/footer');
    }
    public function fees_view(){
        $this->load->view('private/fees/fees_view');
    }
}