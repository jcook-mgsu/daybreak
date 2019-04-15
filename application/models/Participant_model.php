<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Participant_model extends CI_Model {

      // Constructor
      public function __construct() {
        parent:: __construct();
        // Load general helper to be used in all functions
        $this->load->helper('general_helper');
      }

      // Add a participant

      // Delete a participant

      // Edit a participant

      // Get all participants
      public function get_participants() {
        $this->db->select('*');
        $this->db->from('participants');
        $this->db->order_by('lname');
        $results = $this->db->get();

        if($results->num_rows() > 0) {
          foreach($results->result_array() as $row) {
            $participants[] = array(
              'id'                    => $row['id'],
              'fname'                 => $row['fname'],
              'mname'                 => $row['mname'],
              'lname'                 => $row['lname'],
              'last_4_social'         => $row['last_4_social'],
              'last_4_alt'            => $row['last_4_alt'],
              'birthday'              => $row['birthday'],
              'race'                  => $row['race'],
              'gender'                => $row['gender'],
              'former_name'           => $row['former_name'],
              'created'               => $row['created_at'],
              'updated'               => $row['updated_at']
            );
          }
        } else {
          $participants = '';
        }

        return $participants;
      }

      // Get a single participant by ID
      public function get_participant_by_id($id) {
        $this->db->select('*');
        $this->db->from('participants');
        $this->db->where('id', $id);
        $results = $this->db->get();

        if($results->num_rows() > 0) {
          foreach($results->result_array() as $row) {
            $participant[] = array(
              'id'                    => $row['id'],
              'fname'                 => $row['fname'],
              'mname'                 => $row['mname'],
              'lname'                 => $row['lname'],
              'last_4_social'         => $row['last_4_social'],
              'last_4_alt'            => $row['last_4_alt'],
              'birthday'              => $row['birthday'],
              'race'                  => $row['race'],
              'gender'                => $row['gender'],
              'former_name'           => $row['former_name'],
              'created'               => $row['created_at'],
              'updated'               => $row['updated_at']
            );
          }
        } else {
          $participant =  '';
        }

        return $participant;
      }

      // Get a single activity by ID
      public function get_activity_by_id($id) {
        $this->db->select('*');
        $this->db->from('activity_types');
        $this->db->where('id', $id);
        $results = $this->db->get();

        if($results->num_rows() > 0) {
          foreach($results->result_array() as $row) {
            $activity[] = array(
              'id'                    => $row['id'],
              'name'                  => $row['name']
            );
          }
        } else {
          $activity =  '';
        }

        return $activity;
      }

      // Get all activities by all participants
      public function get_all_activity_log() {
        $this->db->select('*');
        $this->db->from('activity_log');
        $this->db->order_by('added');
        $results = $this->db->get();

        if($results->num_rows() > 0) {
          foreach($results->result_array() as $row) {
            // Get the participant data based on the id
            $participant = $this->get_participant_by_id($row['participant_id']);
            // Get the activity data based on the id
            $activity = $this->get_activity_by_id($row['activity_type_id']);

            foreach($participant as $col) {
              $fname = $col['fname'];
              $lname = $col['lname'];
            }

            foreach($activity as $col) {
              $act_name = $col['name'];
            }

            $log_records[] = array(
              'id'                      => $row['id'],
              'participant'             => $fname." ".$lname,
              'activity_type'           => $act_name,
              'activity_start_datetime' => prettify_datetime($row['activity_start_datetime']),
              'activity_end_datetime'   => prettify_datetime($row['activity_end_datetime'])
            );
          }

        } else {
          $log_records = '';
        }

        return $log_records;
      }

      // Get all activities completed by a single participant

      // Convert last_4_alt into actual values from table

    }
