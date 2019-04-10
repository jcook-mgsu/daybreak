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

		// Load participant model
		$this->load->model('Participant_model');
		// Load activity model
		$this->load->model('Activity_model');
	}

	public function index() {
		if(!$this->ion_auth->logged_in()) {
			$this->session->set_flashdata("error", "Please login to access application.");
			redirect("auth/login");
		} else {
			$participants = $this->Participant_model->get_participants();

			$data['params'] = array(
				'view'					=> 'participants/index',
				'title'					=> 'Participants | Depaul Daybreak',
				'participants'	=> $participants
			);
			$this->load->view('templates/template', $data);
		}
	}

	public function log_activity() {
		if(!$this->ion_auth->logged_in()) {
			$this->session->set_flashdata("error", "Please login to access application.");
			redirect("auth/login");
		} else {
			$participants = $this->Participant_model->get_participants();
			$activities = $this->Activity_model->get_activities();

			$data['params'] = array(
				'view'					=> 'participants/log-activity',
				'title'					=> 'Log Activity | Depaul Daybreak',
				'participants'	=> $participants,
				'activities'		=> $activities
			);
			$this->load->view('templates/template', $data);
		}
	}
}
