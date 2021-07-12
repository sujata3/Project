<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<head>
	<title>Form</title>
</head>
<body>
	
	<div class="card col-md-6 offset-3" style="margin-top: 40px;">
		<div class="card-header text-center">
			Form
		</div>
		<div class="card-body">
        @if(Session::has('success'))
        <div class="alert alert-success">
        {{Session::get('success')}}
        </div>
        
        @endif

        @if(Session::has('fail'))
        <div class="alert alert-danger">
        {{Session::get('fail')}}
        </div>
        @endif
		<a style="float:right" href="{{route('get.lists')}}">Data list</a>
			<!-- <form method="post" action="store"> -->
			<form method="post" action="{{route('post.add')}}">
            @csrf
				<div class="form-group">
					<label>First Name:</label>
					<input type="text" class="form-control" placeholder="Enter your first name" name="firstname"  required>
                    <span style="color:red">@error('firstname'){{$message}} @enderror </span>
				</div>
				<div class="form-group">
					<label>Last Name:</label>
					<input type="text" class="form-control" placeholder="Enter your last name" name="lastname"  required>
                    <span style="color:red">@error('lastname'){{$message}} @enderror </span>

				</div>
                <div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" placeholder="Enter your email" name="email"  required>
                    <span style="color:red">@error('email'){{$message}} @enderror </span>

				</div>
				<div class="col-md-6 offset-5">
					<button type="submit" class="btn btn-lg btn-primary" name="submit">Save</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>