<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Play extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		$data["main_content"] =	"client/index";

		$this->load->view('template/template', $data);
	}

	public function save()
	{
		print_r($this->input->post(NULL, TRUE)); die('sdfsd');
	}
}

/* End of file play.php */
/* Location: ./application/controllers/play.php */