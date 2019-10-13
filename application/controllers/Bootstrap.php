<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bootstrap extends CI_Controller{

    function __construct() {
        parent::__construct();

    }

    public function index(){ // home
        $data = array(
                'menu_active'   => 'home',
            );
        $this->load->view('v_home', $data);
    }

    public function about(){
        $data = array(
                'menu_active'   => 'about',
            );
        $this->load->view('v_about', $data);
    }

    public function contact(){
        $data = array(
                'menu_active'   => 'contact',
            );
        $this->load->view('v_contact', $data);
    }
    
}
