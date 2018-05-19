<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    Class Home extends CI_Controller{
        
        function __construct() {
        parent::__construct();
         $this->load->helper('url');
            $this->load->helper('form');
        $this->load->library('form_validation');
     //   $this->load->model('user');
    }
     
        public function index(){
           // echo "manish kumar sadhu";
            $this->data['title']="Home";
            $this->load->helper('url');
            $this->load->helper('form');
             $this->load->view('templates/header',$this->data);
          //  $this->load->view('pages/login',$this->data);
             $this->load->view('templates/footer',$this->data);
        }


        public function dummy(){
           
          //    $this->load->view('templates/header',$this->data);
           // $this->load->view('templates/leftnav',$this->data);
             $this->load->view('pages/user_statistics');
            //$this->load->view('templates/footer',$this->data);
        }
        
    }