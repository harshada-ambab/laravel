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
      <td><a href="st_edit/{{$st->id}}">Edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>