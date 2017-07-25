<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Hitung extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->helper(array('url','form'));
	}

	function index()
	{
		$this->load->view('menu_hitung');
	}



	function perkalian()
	{
		$data['vi1']=(int)$this->input->post('vi1',TRUE);
		$data['vi2']=(int)$this->input->post('vi2',TRUE);
		$data['hasil']=$data['vi1'] * $data['vi2'];
		$this->load->view('perkalian', $data);
	}

	function pembagian()
	{
		$data['vi1']=(int)$this->input->post('vi1',TRUE);
		$data['vi2']=(int)$this->input->post('vi2',TRUE);
		if ($data['vi2']>0)
			$data['hasil']=$data['vi1'] / $data['vi2'];
		else
			$data['hasil']='error, Tidak boleh 0 !';
		$this->load->view('pembagian', $data);
	}

	function pengurangan()
	{
		$data['judul']= 'pengurangan dengan CI';
		$data['vi1']=(int)$this->input->post('vi1', TRUE);
		$data['vi2']=(int)$this->input->post('vi2',TRUE);
		$data['hasil']= $data['vi1'] - $data['vi2'];
		$this->load->view('pengurangan', $data);
	}

	function penambahan()
	{
		$data['title']= 'Penambahan dengan CI';
		$data['Judul']= 'Applikasi pertambahan';
		$data['vi1']=(int)$this->input->post('vi1', TRUE);
		$data['vi2']=(int)$this->input->post('vi2', TRUE);
		$data['hasil']=$data['vi1'] + $data['vi2'];
		$this->load->view('penambahan', $data);
	}

	function kejujuran()
	{
		$data['title'] = 'Tes kejujuran bos';
		$data['namal']=(string)$this->input->post('namal', TRUE);
		$data['namap']=(string)$this->input->post('namap', TRUE);
		if ($data['namal']='hannan'){
			$data['hasil'] = 'Ganteng juwah bosss';
		}
		else{
			$data['hasil'] = 'jhubek sarah jiriyah bross';
		}
	}
}

/* End of file hitung.php */
/* Location: ./application/controllers/hitung.php */