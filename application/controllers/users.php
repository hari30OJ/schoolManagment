<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function index()
	{
		echo "This is the index page";
		$this->load->view('inc_header.html');
		$this->load->view('inc_footer.html');
	}

	public function getUsers()
	{
		echo "Here";
		$this->load->view('welcome_message');
	}

	public function addUsers()
	{
		echo "Here";
		$this->load->view('welcome_message');
	}

	public function updateUsers()
	{
		echo "Here";
		$this->load->view('welcome_message');
	}

	public function removeUsers()
	{
		echo "Here";
		$this->load->view('welcome_message');
	}

	public function archiveUsers()
	{
		echo "Here";
		$this->load->view('welcome_message');
	}
}
