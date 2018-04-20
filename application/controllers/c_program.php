<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_program extends CI_Controller {

	
	public function index()
	{
		$data['isi'] = $this->load->view('v_program', '', true);

		$this->load->view('main_view',$data);
	}

	public function anton($id)
	{
		$data['isi'] = $this->load->view('v_program', '', true);
		echo $id;

		$this->load->view('main_view',$data);
	}


}
