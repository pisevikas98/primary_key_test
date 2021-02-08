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
      <a class="navbar-brand" href="#">User CRUD</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Create User</a></li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="row">
		<h3>Add User</h3>
	</div>
	<div class="row">
		<form action="{{ url('update_user') }}/{{ $user->id }}" method="POST" enctype="multipart/form-data">
			@csrf
		  <div class="form-group">
		    <label>First Name</label>
		    <input type="text" name="first_name" value="{{ $user->first_name }}"  class="form-control">
		  </div>


		  <div class="form-group">
		    <label>Last Name</label>
		    <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control">
		  </div>

		  <div class="form-group">
		    <label>Email</label>
		    <input type="email" name="email"  value="{{ $user->email }}" class="form-control">
		  </div>

		  <div class="form-group">
		    <label>Mobile</label>
		    <input type="number" name="mobile" value="{{ $user->mobile }}" class="form-control">
		  </div>

		  <div class="form-group">
		    <label>Profile Pic</label>
		    <br>
		    <img src="{{ url('/') }}/{{ $user->profile_pic }}" width="200">
		    <br>
		    <input type="file" name="profile_pic" class="form-control">
		  </div>

		  <button type="submit" class="btn btn-success">Submit</button>
		</form>		
	</div>
</div>

</body>
</html>