<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
First name
            </tr>
            <tr>Last name</tr>
            <tr>City name</tr>
            <tr>Email </tr>
        </thead>
<tbody>
    @foreach ($students as $student)
    
    <td>{{ $student->first_name}}</td>     
<td>{{ $student->last_name}}</td>
<td>{{$student->city_name}}</td>
<td>{{$student->email}}</td>   
    @endforeach
</tbody>
    </table>

        
    
</body>
</html>