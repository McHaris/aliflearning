<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_galeri extends CI_Controller {

	
	public function index()
	{
		$data['isi'] = $this->load->view('v_galeri', '', true);

		$this->load->view('main_view',$data);
	}
}
