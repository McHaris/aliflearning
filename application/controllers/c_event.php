<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_event extends CI_Controller {

	
	public function index()
	{
		$data['isi'] = $this->load->view('v_event', '', true);

		$this->load->view('main_view',$data);
	}
}
