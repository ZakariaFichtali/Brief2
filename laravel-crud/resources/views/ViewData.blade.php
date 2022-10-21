{{-- {{$data}} --}}
@foreach ($data as $row )

    <div>
        ID : {{$row->id}} ---------- Name : {{$row->name}}
    </div>

@endforeach
