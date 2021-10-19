<table class="table table-striped" >
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
      <td><button type="button" class="btn btn-primary editbtn" value="{{$st->id}}">Edit</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

<script>
  $(document).ready( function() {
    $(document).on('click','.editbtn', function(){
      var id = $(this).val();
      // alert(id);
      $('#data-id').val(id);
      $('#editModal').modal('show');
      $.ajax({
        method : "GET",
        url : "st_edit/"+id,
        success : function(data){
          console.log(data.student.Name);
          console.log(data);
          $("#name").val(data.student.Name);
          $("#email").val(data.student.Email);
          $("#age").val(data.student.Age);
        }
      })
    });
  
  });
</script>