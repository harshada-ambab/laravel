<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Form</title>
</head>
<style>
    .container{
        width: 60%;
        margin:25px auto;
    }    
</style>
<body>
<div class="container">

    <h2>Student Form</h2><br>
    {{session('msg')}}
<form method="post" action="student_submit">
    @csrf
  <div class="form-group">
    <label for="text">Name</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Name" required>  
  </div> 
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>  
  </div> 

  <div class="form-group">
    <label for="number">Age</label>
    <input type="number" class="form-control" name="age" id="age" aria-describedby="emailHelp" placeholder="Enter Age" required>  
  </div> 

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($stArr as $st)
    <tr>
      <th scope="row">{{$st->id}}</th>
      <td>{{$st->Name}}</td>
      <td>{{$st->Email}}</td>
      <td>{{$st->Age}}</td>
      <td><a href="student/{{$st->id}}">Delete</a></td>
      <td><a href="st_edit/{{$st->id}}">Edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<span>
{{$stArr->links()}}
</span>

</div>
</body>
</html>

