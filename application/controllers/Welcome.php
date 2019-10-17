<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{	
	public function index()
	{
		//$this->load->model('users'); *change in autoload* {	$autoload['model'] = array('users');	}
		$data['users']=$this->users->get();
		$this->load->view('view_users',$data);
	}
}
