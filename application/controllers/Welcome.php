<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
	* Welcome controller to handle default landing pages.
	*
	* Version 1.0
	*/

class Welcome extends CI_Controller {

	// add constructor

	public function index() {
		$data['params'] = array(
			'view'		=> 'home',
			'title'		=> 'Depaul Daybreak'
		);
		$this->load->view('templates/template', $data);
	}

	public function landing() {
		if($this->ion_auth->logged_in()) {
			// Set the data to be passed to the view
			$data = array(
				'view'          => 'landing',
				'title'         => 'Home'
			);

			// Load the view
			$this->load->view('templates/template', $data);
		} else {
			$this->session->set_flashdata("error", "Please login to access application.");
			redirect("welcome/index");
		}
	/*	if($_SESSION['logged-in'] == FALSE) {
			$this->session->set_flashdata("error", "Please login to access application.");
			redirect("welcome/index");
		}*/

		// Set the data to be passed to the view
	/*	$data = array(
			'view'          => 'landing',
			'title'         => 'Home'
		);

		// Load the view
		$this->load->view('templates/template', $data);*/
	}
}
