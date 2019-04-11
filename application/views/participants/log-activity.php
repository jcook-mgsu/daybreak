<div class="row">
  <div class="col xl12">
    <h1>Log Activity for <?php echo $_GET['fname']." ".$_GET['lname']; ?></h1>
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
    <?php echo form_open('participants/log_activity'); ?>
    <div class=" input-field col xl6">
      <?php // Comp Date Input
        $params = array(
          'id'            => 'activity_date',
          'class'         => 'validate',
          'name'          => 'activity_date',
          'placeholder'   => 'Activity Date',
          'type'          => 'datetime-local'
        );
      ?>
      <?php echo form_input($params); ?>
    </div>
    <div class="input-field col xl6">
      <?php // Activity Type
        $options = array();
        foreach($activities as $activity) {
          $options[$activity['id']] = $activity['name'];
        }

        $params = array(
          'id'            => 'activity_type',
          'class'         => '',
          'options'       => $options,
          'name'          => 'activity_type',
          'placeholder'   => 'Activity Type'
        );
      ?>
      <?php echo form_dropdown($params); ?>
    </div>
    <div class="col xl12">
      <?php // Submit input params
        $params = array(
          'id'            => 'log-activity',
          'name'          => 'log-activity',
          'class'         => 'btn btn-success',
          'value'         => 'Log Activity'
        );
      ?>
      <?php echo form_submit($params); ?>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>
