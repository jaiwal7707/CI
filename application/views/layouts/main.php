<?php

  $home = "";
  $register = "";
  $projects = "";

  if($this->uri->segment(1) == 'projects'){
    $projects = "active";
  }else if($this->uri->segment(2) == 'register'){
    $register = "active";
  }else{
    $home = "active";
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">CI APP</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php echo $home; ?>" href="<?php echo base_url(); ?>">Home</a>
      </li>
      <?php if ($this->session->userdata('logged_in')) { ?>
        <li class="nav-item">
          <a class="nav-link <?php echo $projects; ?>" href="<?php echo base_url(); ?>projects">Projects</a>
        </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link <?php echo $register; ?>" href="<?php echo base_url(); ?>users/register">Register</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">

        <?php if ($this->session->userdata('logged_in')) { ?>
          
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
            </li>

        <?php } ?>
          
      </ul>
    </form>
  </div>
</nav>


<br>

<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<?php $this->load->view("users/login_view"); ?>
	 	</div>
		<div class="col-lg-9">
			<?php $this->load->view($main_view); ?>
		</div>
	</div>
</div>



</body>
</html>

