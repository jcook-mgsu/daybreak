<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
	* Participants controller to handle requests relating to participants.
	*
	* Version 1.0
	*/

class Participants extends CI_Controller {

	// add constructor

	public function index() {
		$data['params'] = array(
			'view'		=> 'participants/index',
			'title'		=> 'Participants | Depaul Daybreak'
		);
		$this->load->view('templates/template', $data);
	}

	public function landing() {

	}
}
