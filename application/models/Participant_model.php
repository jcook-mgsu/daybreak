<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Participant_model extends CI_Model {

      // Constructor
      public function __construct() {
        parent:: __construct();
      }

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

    }
