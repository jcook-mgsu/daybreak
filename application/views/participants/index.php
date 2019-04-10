<div class="row">
  <div class="col col-lg-12">
    <h2>All Participants</h2>
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
      $template = array('table_open' => '<table id="all-participants-table" class="striped highlight responsive-table">');
      $this->table->set_template($template);

      $this->table->set_heading(array('First Name', 'Middle Name', 'Last Name', 'Last 4 Social', 'Last 4 Alternate', 'Birthday', 'Race', 'Gender', 'Former Name'));

      foreach($participants as $column) {
        $this->table->add_row(array($column['fname'], $column['mname'], $column['lname'], $column['last_4_social'], $column['last_4_alt'], $column['birthday'], $column['race'], $column['gender'], $column['former_name']));
      }

      echo $this->table->generate();
    ?>
  </div>
</div>
