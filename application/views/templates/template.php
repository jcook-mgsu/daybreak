<?php

  /**
  * Load header and footer templates, and place views for body pages inside
  */

  $this->load->view('templates/header', $params['title']);
  $this->load->view($params['view']);
  $this->load->view('templates/footer');

?>
