<?php

  /**
  * Load header and footer templates, and place views for body pages inside
  */

  if(!isset($params['participants'])) {
    $params['participants'] = '';
  }

  if(!isset($params['activities'])) {
    $params['activities'] = '';
  }

  if(!isset($params['log_records'])) {
    $params['log_records'] = '';
  }

  $extra_data = array(
    'participants'      => $params['participants'],
    'activities'        => $params['activities'],
    'log_records'       => $params['log_records']
  );

  $this->load->view('templates/header', $params['title']);
  $this->load->view($params['view'], $extra_data);
  $this->load->view('templates/footer');

?>
