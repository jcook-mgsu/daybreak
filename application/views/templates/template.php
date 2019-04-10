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

  $extra_data = array(
    'participants'      => $params['participants'],
    'activities'        => $params['activities']
  );

  $this->load->view('templates/header', $params['title']);
  $this->load->view($params['view'], $extra_data);
  $this->load->view('templates/footer');

?>
