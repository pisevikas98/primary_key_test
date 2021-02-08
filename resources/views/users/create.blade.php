<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">User CRUD</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/add_user') }}">Create User</a></li>
      <li><a href="{{ url('/users') }}">Users</a></li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="row">
		<h3>Add User</h3>
	</div>
	<div class="row">
		<form action="{{ url('save_user') }}" method="POST" enctype="multipart/form-data">
			@csrf
		  <div class="form-group">
		    <label>First Name</label>
		    <input type="text" name="first_name" class="form-control">
		  </div>

		  <input type="hidden" name="role_id" value="1">

		  <div class="form-group">
		    <label>Last Name</label>
		    <input type="text" name="last_name" class="form-control">
		  </div>

		  <div class="form-group">
		    <label>Email</label>
		    <input type="email" name="email" class="form-control">
		  </div>

		  <div class="form-group">
		    <label>Mobile</label>
		    <input type="number" name="mobile" class="form-control">
		  </div>

		  <div class="form-group">
		    <label>Profile Pic</label>
		    <input type="file" name="profile_pic" class="form-control">
		  </div>

		  <div class="form-group">
		    <label>Password</label>
		    <input type="password" name="password" class="form-control">
		  </div>

		  <button type="submit" class="btn btn-success">Submit</button>
		</form>		
	</div>
</div>

</body>
</html>