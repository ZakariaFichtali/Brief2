<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <!-- CSS only -->
      <link rel="stylesheet" href="{{asset('css/create.css')}}">
      <!-- bootstrap  -->
      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}

</head>
<body>
    <h1>Ajouter Promotion</h1>

    <div class="flx">
        <form action="{{route('promotions.store')}}" method="post">
            @csrf
            <input style=" border: 2px solid #6fb07f;
                            width: 300px;
                            height: 30px;
                            color: #6fb07f;

            " type="text" name="name" placeholder="Ajouter Promotion">
            <button  type="submit" class="btn"><span>Submit</span><img src="https://i.cloudup.com/2ZAX3hVsBE-3000x3000.png" height="62" width="62"></button>

        </form>

    </div>



</body>
</html>
