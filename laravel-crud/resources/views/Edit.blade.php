


{{-- ------------------------ Edit -------------------------- --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Edit  Promotions</h1>


    <form action="{{url('update/'.$ziko->id)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" style="border: 2px solide #3e52c0" placeholder="Insert  Promotions" value="{{$ziko->name}}">
        <button>UPDATE</button>
    </form>

</body>
</html>
