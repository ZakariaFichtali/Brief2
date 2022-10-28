<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/editApprenant.css')}}">
    <title>editApprenant</title>
</head>
<body>

<h1 style="text-align: center; font-size:40px;">Edit Apprenant</h1>

<div class="flx">
    <div class="card" >
        <form action="{{route('gestionstud.update',[$apprenant->id])}}" method="post">
            @csrf
            @method('PUT')
                  <div class="a1"><h2>Prenom:</h2> <input name="Prenom" value="{{$apprenant->Prenom}}" type="text" ></div>
                  <div class="a1"><h2> Nom:</h2><input name="Nom" value="{{$apprenant->Nom}}" type="text"  ></div>
                    <div class="a1"><h2>Email:</h2> <input name="Email" value="{{$apprenant->Email}}" type="email"  ></div>
                        <div class="a1"> <h2>Idpromotion:</h2><input name="PromotionID" value="{{$apprenant->PromotionID}}"></div>

            <button class="Modifier" type="submit">Modifier</button>
        </form>
    </div>
</div>



</body>
</html>
