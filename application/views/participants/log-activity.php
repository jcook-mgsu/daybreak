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
    <div class=" input-field col xl4">
      <?php // Start Date Input
        $params = array(
          'id'            => 'activity_date',
          'class'         => 'validate',
          'name'          => 'activity_date',
          'placeholder'   => 'Activity Start Date',
          'type'          => 'datetime-local'
        );
      ?>
      <?php echo form_input($params); ?>
    </div>
    <div class=" input-field col xl4">
      <?php // End Date Input
        $params = array(
          'id'            => 'activity_end_date',
          'class'         => 'validate',
          'name'          => 'activity_end_date',
          'placeholder'   => 'Activity End Date',
          'type'          => 'datetime-local'
        );
      ?>
      <?php echo form_input($params); ?>
    </div>
    <div class="input-field col xl4">
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
      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
      <input type="hidden" name="fname" value="<?php echo $_GET['fname']; ?>">
      <input type="hidden" name="lname" value="<?php echo $_GET['lname']; ?>">
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
