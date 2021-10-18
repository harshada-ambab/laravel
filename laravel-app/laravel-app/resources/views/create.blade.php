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
<a href="crud" class="link-primary">Back</a><br>
    <h2>Insert Form</h2><br>
<form method="post" action="crud_submit">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
   
  </div>    
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>

