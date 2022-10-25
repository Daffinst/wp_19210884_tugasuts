<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{
 function __construct(){
 parent::__construct();
 }
    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('Web_Template/V_header',$data);
        $this->load->view('Web_Template/V_index',$data);
        $this->load->view('Web_Template/V_Footer',$data);
        }
	public function about(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('Web_Template/V_header',$data);
        $this->load->view('Web_Template/V_about',$data);
        $this->load->view('Web_Template/V_Footer',$data);
		}
}

	   
 
 