<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* kelas untuk blog_view.php
*/
class Blog_satu extends CI_Controller
{
	
	public function __construct()
	{
		# code...
		parent::__construct();
	}

	function index(){
		$data['judul'] = "Judul blog";
		$data['isi'] = "Isi blog";
		$out = $this->load->view('blog_view', $data, true);
		echo $out;
	}
}


/* End of file blog_satu.php */
/* Location: ./application/controllers/blog_satu.php */