<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Laravel Crud</title>
</head>
<body>
<div class="container">
    <h2>Laravel Show table</h2><br><br>

    <a href="create" class="link-primary">Add Records</a><br>
    {{session('msg')}}
    <br>
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">CreatedAt</th>
      <th scope="col">UpdatedAt</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($readArr as $read)
    <tr>
      <th scope="row">{{$read->id}}</th>
      <td>{{$read->name}}</td>
      <td>{{$read->created_at}}</td>
      <td>{{$read->updated_at}}</td>
      <td><a href="crud_delete/{{$read->id}}">Delete</a></td>
      <td><a href="crud_edit/{{$read->id}}">Edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>