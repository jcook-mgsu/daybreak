<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
	* Participants controller to handle requests relating to participants.
	*
	* Version 1.0
	*/

class Participants extends CI_Controller {

	// Constructor
	public function __construct() {
		parent:: __construct();

		// Load equipment model
		$this->load->model('Participant_model');
	}

	public function index() {
		$participants = $this->Participant_model->get_participants();

		$data['params'] = array(
			'view'					=> 'participants/index',
			'title'					=> 'Participants | Depaul Daybreak',
			'participants'	=> $participants
		);
		$this->load->view('templates/template', $data);
	}

	public function landing() {

	}
}
