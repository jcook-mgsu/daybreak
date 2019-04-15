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

	// Main participants list page
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

	// Log an activity page
	public function log_activity() {
		if(!$this->ion_auth->logged_in()) {
			$this->session->set_flashdata("error", "Please login to access application.");
			redirect("auth/login");
		} else {
			// If log-activity has been submitted
			if(isset($_POST['log-activity'])) {
				// Create array of data to pass to model
				$form_data = array(
					'activity_date'			=> $_POST['activity_date'],
					'activity_end_date'	=> $_POST['activity_end_date'],
					'activity_type'			=> $_POST['activity_type'],
					'participant_id'		=> $_POST['id']
				);

				$this->Activity_model->log_activity($form_data);
				$this->session->set_flashdata("success", "Activity has been logged.");
				redirect('participants/log_activity?id='.$_POST['id'].'&fname='.$_POST['fname'].'&lname='.$_POST['lname']);
			}

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

	// View all activities log
	public function activity_log() {
		if(!$this->ion_auth->logged_in()) {
			$this->session->set_flashdata("error", "Please login to access application.");
			redirect("auth/login");
		} else {
			$log_records = $this->Participant_model->get_all_activity_log();

			$data['params'] = array(
				'view'					=> 'activity-log',
				'title'					=> 'Activity Log | Depaul Daybreak',
				'log_records'		=> $log_records
			);
			$this->load->view('templates/template', $data);
		}
	}
}
