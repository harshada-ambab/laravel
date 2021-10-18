<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<a href="../student" class="link-primary">Back</a><br>
    <h2>Insert Form</h2><br>
    <form method="post" action="{{route('update',[$stArr->id])}}">
    @csrf
  <div class="form-group">
    <label for="text">Name</label>
    <input type="text" class="form-control" value="{{$stArr->Name}}" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Name" required>  
  </div> 
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" value="{{$stArr->Email}}" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>  
  </div> 

  <div class="form-group">
    <label for="number">Age</label>
    <input type="number" class="form-control" value="{{$stArr->Age}}" name="age" id="age" aria-describedby="emailHelp" placeholder="Enter Age" required>  
  </div> 

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>

