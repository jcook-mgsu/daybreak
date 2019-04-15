<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Activity_model extends CI_Model {

      // Constructor
      public function __construct() {
        parent:: __construct();
      }

      // Add an activity

      // Edit an activity

      // Get all activities
      public function get_activities() {
        $this->db->select('*');
        $this->db->from('activity_types');
        $this->db->order_by('name');
        $results = $this->db->get();

        if($results->num_rows() > 0) {
          foreach($results->result_array() as $row) {
            $activities[] = array(
              'id'                    => $row['id'],
              'name'                  => $row['name']
            );
          }
        } else {
          $activities = '';
        }

        return $activities;
      }

      // Log an activity to a participant
      public function log_activity($data) {
        // Prep the data for insertion
        $data_prepped = array(
          'participant_id'            => $data['participant_id'],
          'activity_type_id'          => $data['activity_type'],
          'activity_start_datetime'   => $data['activity_date'],
					'activity_end_datetime'     => $data['activity_end_date']
        );

        $this->db->insert('activity_log', $data_prepped);
      }
    }
