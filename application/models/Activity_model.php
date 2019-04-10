<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Activity_model extends CI_Model {

      // Constructor
      public function __construct() {
        parent:: __construct();
      }

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

    }
