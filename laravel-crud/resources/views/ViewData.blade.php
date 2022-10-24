{{-- {{$data}} --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Promotions</h1>

<table>


<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
</thead>

<tbody>


    @foreach ($data as $row )
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td><a href="Edit/{{$row->id}}">Edit</a></td>
            <td><a href="delete{{$row->id}}">Delete</a></td>

        </tr>
    @endforeach
</tbody>

</table>




</body>
</html>
