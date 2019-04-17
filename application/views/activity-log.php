<div class="row">
  <div class="col xl12">
    <h1>Activity History</h1>
    <?php if(isset($_SESSION['success'])) { ?>
			<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
		<?php } ?>
    <?php if(isset($_SESSION['error'])) { ?>
			<div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
		<?php } ?>
  </div>
</div>
<div class="row">
  <div class="col xl12">
    <?php
      $template = array('table_open' => '<table id="all-activities-table" class="striped highlight responsive-table">');
      $this->table->set_template($template);

      $this->table->set_heading(array('Participant Name', 'Activity', 'Start Date & Time', 'End Date & Time'));

      if($log_records != '') {
        foreach($log_records as $column) {
          $this->table->add_row(array($column['participant'], $column['activity_type'], $column['activity_start_datetime'], $column['activity_end_datetime']));
        }
      } else {
        $this->table->add_row(array('', '', '', ''));
      }

      echo $this->table->generate();
    ?>
  </div>
</div>
