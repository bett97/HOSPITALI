<!DOCTYPE html>
<?php  include("func.php");?>
<html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="jumbotron" style="background:url('img/6.jpg')no-repeat;background-size: cover; height: 300px"></div>
<div  class="container-fluid">
    <div class="container">
    	<div class="card">
    		<div class="card-body" style="background-color: #3498DB;color: #fffff;">
    			<div class="row">
    				<div class="col-md-1">
    			<a href="admin-panel.php" class="btn btn-light">Back</a>
    		</div>
    		<div class="col-md-3"><h3>Patient details</h3></div>
            <div class="col-md-8"></div>
            <form class="form-group" action="patient_search.php" method="post">
            	<div class="row">
            	<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Enter Contact"></div>
            	<div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="search"></div>
            	</div>

            </form>
        </div></div>
    	<div class="card-body" style="background-color: #3498DB;color: #fffff;">
<table class="table table-hover">
  <thead>
    <tr>
      <th> First Name</th>
      <th> Last Name</th>
      <th> Email address</th>
      <th> Contact</th>
      <th> Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>
       <?php get_patient_details(); ?>
  </tbody>
</table>
    </div>
    </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>