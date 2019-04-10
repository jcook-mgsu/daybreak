<?php

  /**
  * Load header and footer templates, and place views for body pages inside
  */

  if(!isset($params['participants'])) {
    $params['participants'] = '';
  }

  $extra_data = array(
    'participants'      => $params['participants']
  );

  $this->load->view('templates/header', $params['title']);
  $this->load->view($params['view'], $extra_data);
  $this->load->view('templates/footer');

?>
