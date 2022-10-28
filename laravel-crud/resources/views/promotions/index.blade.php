<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- bootstrap  -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
    <title>Document</title>
</head>
<body>

    <h1 class="tit">Promotions</h1>
    <p>Vous pouvez afficher, ajouter ou modifier des promotions à partir d'ici</p>

</div>

    <div class="main">

    </div>
                    <div class="el2">
                            <a class="AjouterPromotion" href="{{route('promotions.create')}}"> <button  class="addd">Ajouter Promotion</button></a>
                            <input class="Search" type="search" id="search" name="search" placeholder="Search">
                    </div>


                    <table class="table">
                        <thead>
                            <tr class="table-dark">
                                <th># </th>
                                <th>Nom </th>
                                <th> </th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody class="table1">
                        @foreach ($promotions as $promotion)
                            <tr>
                                <td style="width: 15%">{{ $promotion->id }}</td>
                                <td style="width: 70%">{{ $promotion->name }}</td>

                                <td style="width: 20%"><a class="Modifier" href="{{route('promotions.edit',$promotion->id)}}">Modifier</a>
                                    <form action="{{route('promotions.destroy',$promotion->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <td><input class="Supprimer" type="submit" value="Supprimer" /></td>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                    <tbody id="Content" class="table2"></tbody>

                    </table>









<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        if($value){
                $('.table1').hide();
                $('.table2').show();
            }
            else{
                $('.table1').show();
                $('.table2').hide();
            }

    $.ajax({
        type:'get',
        url:'{{URL::to("search")}}',
        data:{'search':$value},
        success:function(data){
            $('#Content').html(data);

        }
    });
    })

</script>

</body>
</html>
