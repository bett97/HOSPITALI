<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="jumbotron" style="background:url('img/6.jpg')no-repeat;background-size: cover; height: 300px"></div>
<div  class="container-fluid">
<div class="row">
	<div class="col-md-3">
		<div class="list-group">
			<a href="" class="list-group-item active" style="background-color: #3498DB;color: #fffff; border-color: #3498DB;">Patients</a>
			<a href="patient_details.php" class="list-group-item">Patient deatails</a>
			<a href="" class="list-group-item">Payment</a>
		</div>
		<hr>
			<div class="list-group">
			<a href="" class="list-group-item active" style="background-color: #3498DB;color: #fffff; border-color: #3498DB;">Staff</a>
			<a href="" class="list-group-item">Staff deatails</a>
			<a href="" class="list-group-item">Add new staff</a>
			<a href="" class="list-group-item">other</a>
		</div>
	</div>
	<div class="col-md-8"> 
     <div class="card"> 
         <div class="card-body" style="background-color: #3498DB;color: #fffff;">
         	Book An appointment
         </div>
          <div class="card-body" >
          	  <form class="form-group" action="func.php" method="post">
          	  	<label>First Name: </label>
          	  	<input type="text" name="fname" class="form-control"><br>
          	  	<label>Last Name: </label>
          	  	<input type="text" name="lname" class="form-control"><br>
          	  	<label>Email address: </label>
          	  	<input type="text" name="email" class="form-control"><br>
          	  	<label>Contact: </label>
          	  	<input type="text" name="contact" class="form-control"><br>
          	  	<label>Doctor Appointment: </label>
          	 <select class="form-control" name="appoint">
          	 	<option value="Dr Bett time from 10am to 4pm"> Dr Bett time from 10am to 4pm</option>
          	 	<option value="Dr Victor time from 5pm to 12am"> Dr Victor time from 5pm to 12am</option>

          	 </select><br>
          	 <input type="submit" class="btn btn-primary" name="vic_submit" value="forward appointment">
          	  </form>
          </div>
     </div>
	</div>
	<div class="col-md-1"></div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>