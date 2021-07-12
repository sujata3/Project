<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<head>
	<title>Form to edit</title>
</head>
<body>
    

	<div class="card col-md-6 offset-3" style="margin-top: 40px;">
		<div class="card-header text-center">
			Edit Form
		</div>

        @if(Session::has('value_update'))
        <div class="alert alert-success">
        {{Session::get('value_update')}}
        </div>
        
        @endif

        @if(Session::has('update_fail'))
        <div class="alert alert-danger">
        {{Session::get('update_fail')}}
        </div>
        @endif
        <form method="post" action="{{route('update.post')}}">
            @csrf

            <a style="float:right" href="{{route('post.add')}}"><-</a><a style="float:right">Back</a> <br>
            <a style="float:right" href="{{route('get.lists')}}">-></a><a style="float:right">Data list</a>
            <input type="hidden" name="id" value="{{$value->id}}">
				<div class="form-group">
					<label>First Name:</label>
					<input type="text" class="form-control" value="{{$value->firstname}}" name="firstname"  required>
				</div>
				<div class="form-group">
					<label>Last Name:</label>
					<input type="text" class="form-control" value="{{$value->lastname}}"  name="lastname"  required>
				</div>
                <div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" value="{{$value->email}}"  name="email"  required>
				</div>
				<div class="col-md-6 offset-5">
					<button type="submit" class="btn btn-lg btn-primary" name="submit">Update</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>