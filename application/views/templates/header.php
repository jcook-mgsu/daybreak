<!DOCTYPE html>
  <html>
    <head>
      <title><?php echo $params['title']; ?></title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <nav>
        <div class="container">
          <div class="nav-wrapper">
            <a href="<?php echo base_url(); ?>" class="brand-logo">Daybreak</a>
            <?php if($this->ion_auth->logged_in()) : ?>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?php echo base_url(); ?>participants/activity_log">Activity Log</a></li>
                <li><a href="<?php echo base_url(); ?>participants/index">Participants</a></li>
                <li><a href="<?php echo base_url(); ?>auth/logout" class="waves-effect waves-light btn">Logout</a></li>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </nav>
      <?php if($this->ion_auth->logged_in()) : ?>
        <ul class="sidenav" id="mobile-demo">
          <li><a href="<?php echo base_url(); ?>participants/activity_log">Activity Log</a></li>
          <li><a href="<?php echo base_url(); ?>participants/index">Participants</a></li>
          <li><a href="<?php echo base_url(); ?>auth/logout" class="waves-effect waves-light btn">Logout</a></li>
        </ul>
      <?php endif; ?>
      <div class="container main-content">
