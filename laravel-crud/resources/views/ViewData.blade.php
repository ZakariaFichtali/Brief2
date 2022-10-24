{{-- {{$data}} --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ViewData</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
</head>
<body>
<h1>Promotions</h1>

<form action="" method="get">
    <input type="text" name="name" style="border: 2px solide #3e52c0" placeholder="Search  Promotions">
</form>

@if(\Session:: has('success'))
<div class="alert alert-danger">
<h4> {{ \Session::get('success') }}</h4>
</div>
<hr>
@endif


<table class="table">
    <thead>
      <tr class="btn-dark">
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
      <tbody>

            @foreach ($data as $row )
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td><a class="btn btn-success" href="Edit/{{$row->id}}">Edit</a></td>
                    <td><a class="btn btn-danger" href="{{url('delete/'.$row->id)}}">Delete</a></td>

                </tr>
            @endforeach


       </tbody>
    </table>



</body>
</html>
