<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT LOG</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container"><h2 class="text-center">Student Management | Add</h2>
<br>
<form action="{{url('create')}}" method="POST" class="form-group" style="width: 70%; margin-left: 15%;">
 @csrf <!-- {{csrf_field()}} -->
 @method('post')
 
  <label class="form-group">First Name:</label>
  <input type="text" class="form-control" placeholder="First Name" name="first_name">
  <label>Last Name:</label>
  <input type="text" class="form-control" placeholder="Last Name" name="last_name">
<label>City Name:</label>
<select class="form-control" name="city_name">
  <option value="bhubaneswar">Bhubaneswar</option>
  <option value="cuttack">Cuttack</option>
</select>
<label>Email:</label>
  <input type="text" class="form-control" placeholder="Enter Email" name="email"><br>
  <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
</form>
</div>
</form>
  </body>
</html>