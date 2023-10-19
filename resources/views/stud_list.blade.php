<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <table border="1">
        <thead>
            <tr>
<th>
First_name
</th>
<th>
Last_name
</th>
<th>
City_name
</th>
<th>
Email
</th>
<th>
    Actions
</th>
</tr>

        </thead>
<tbody style="padding: 10%;">
    @foreach ($students as $student)
    <tr> 
        <td>{{ $student->first_name}}</td>     
<td>{{ $student->last_name}}</td>
<td>{{$student->city_name}}</td>
<td>{{$student->email}}</td> 
<td>
   
        <button type="button"class="btn btn-primary edit-button" data-toggle="modal" data-target="#editModal{{ $student->id }}" data-id="{{$student->id}}">EDIT</button>
    
   
<button type="button" class="btn btn-danger delete-button" data-toggle="modal" data-target="#deleteModal{{ $student->id }}" data-id="{{$student->id}}">DELETE</button>
</td>
</tr>
<!-- Displaying modal -->
<div class="modal fade" id="editModal{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('students.update', $student->id)}}" method="post">
                @csrf
            @method('PUT')
            <label class="form-group">First Name:</label>
            <input type="text" class="form-control" placeholder="{{$student->first_name}}" name="first_name">
            <label>Last Name:</label>
            <input type="text" class="form-control" placeholder="{{$student->last_name}}" name="last_name">
          <label>City Name:</label>
          <select class="form-control" name="city_name" aria-placeholder="{{$student->city_name}}">
            <option value="bhubaneswar">Bhubaneswar</option>
            <option value="metro">Metro</option>
            <option value="lampung">Bandar_Lampung</option>
            <option value="suscity">Sus_city</option>
          </select>
          <label>Email:</label>
            <input type="text" class="form-control" placeholder="{{$student->email}}" name="email"><br>
            <button type="submit"  value = "Edit Student" class="btn btn-primary">Save changes</button>
        </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Would you like to delete this students data?</h5>
                <form action="{{route('students.destroy', $student->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <br>
                    <button type="submit" class="btn btn-danger button-delete">YES</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach
</tbody>
    </table>


</body>
</html>