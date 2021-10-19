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
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post" action="{{route('update')}}">
        @csrf
        <input type="hidden" name="data-id" id="data-id">
      <div class="form-group">
        <label for="text">Name</label>
        <input type="text" class="form-control"  name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Name" required>  
      </div> 
      
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control"  name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>  
      </div> 

      <div class="form-group">
        <label for="number">Age</label>
        <input type="number" class="form-control" name="age" id="age" aria-describedby="emailHelp" placeholder="Enter Age" required>  
      </div> 

      <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
      </div>
      
    </div>
  </div>
</div>


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
<div id="table_data">
  
@include ('pagination')
</div>

@if ($stArr->lastPage() > 1)
<ul class="pagination">
    <li class="{{ ($stArr->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $stArr->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $stArr->lastPage(); $i++)
        <li class="{{ ($stArr->currentPage() == $i) ? ' active' : '' }}">
            <a class="page-link" data-id="{{ $i }}" href="{{ $stArr->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="{{ ($stArr->currentPage() == $stArr->lastPage()) ? ' disabled' : '' }}">
        <a href="{{ $stArr->url($stArr->lastPage()) }}" >Next</a>
    </li>
</ul>
@endif

  

<script>
$(document).ready(function(){

 $(document).on('click', '.page-link', function(event){
    event.preventDefault(); 
    var page = $(this).attr('data-id');
    fetch_data(page);
 });

 function fetch_data(page)
 {
  var _token = $("input[name=_token]").val();
  $.ajax({
      url:"{{ route('pagination.fetch') }}",
      method:"POST",
      data:{_token:_token, page:page},
      success:function(data)
      {
       $('#table_data').html(data);
      }
    });
 }

});
</script> 


