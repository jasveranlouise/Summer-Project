<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}


	public function index()
	{
		$this->load->view('lelelele');
	}

	public function add()
	{
		$this->load->view('add');
	}
	
	public function login()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->view('login');
	}
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
	public function history()
	{
		$this->load->view('history');
	}
	public function manager()
	{
		$this->load->view('manager');
	}
	
}
