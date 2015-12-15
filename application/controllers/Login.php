<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('facebook');
		$this->load->helper(array('url','form'));
	}

	public function index()
	{
		$this->load->view('login/signin');
	}
	/**
	 * Método de verificação de usuario e permissao de acesso.
	*/
	public function web_login()
	{
		if ($this->facebook->logged_in())
		{
			redirect(base_url()."principal/lancecampanha");
		}
		else {
			redirect($this->facebook->login_url());
		}
	}

	public function post()
	{

		header('Content-Type: application/json');

		$result = $this->facebook->publish_text($this->input->post('message'));
		echo json_encode($result);

	}

	public function logout()
	{
		$this->facebook->destroy_session();
		redirect('/', redirect);
	}
}
