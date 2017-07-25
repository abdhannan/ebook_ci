<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Blog extends CI_Controller
{
	
	public function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		# code...
		$this->load->view('hello_codeigniter');
	}

	public function komentar()
	{
		# code...
		echo "ini adalah komentar";
	}
}



/* End of file blog.php */
/* Location: ./application/controllers/blog.php */