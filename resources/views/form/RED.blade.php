<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <style>
        table {   
            border-collapse: collapse;
            width: 48%
        }
        td,th{
            padding: 5px;
            border: 10px, solid;
        }
    </style>
</head>
<body>
            @if(Session::has('value_delete'))
            <div class="alert alert-success">
            {{Session::get('value_delete')}}
            </div>
            @endif
    <a style="float:right" href="{{route('post.add')}}">Back</a>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>For changes</th>
        </tr>
        @foreach($data as $value)
        <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->firstname}}</td>
        <td>{{$value->lastname}}</td>
        <td>{{$value->email}}</td>
        <td>
           - <a href="/edit-value/{{$value->id}}">Edit</a> ||
            <a href="/delete-value/{{$value->id}}">Delete</a> -
        </td>
        </tr>
        @endforeach
    </table>
</body>
</html>