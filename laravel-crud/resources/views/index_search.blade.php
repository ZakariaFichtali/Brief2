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
    <table id="data">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Actoin</th>
        </tr>
        @foreach ($data as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>
                    <a  class="btn btn-success" href="edit/{{$row->id}}">Edit</a>
                    <a class="btn btn-danger" href="delete/{{$row->id}}">Delete</a>
                </td>
            </tr>
        @endforeach

    </table>


</body>
</html>
