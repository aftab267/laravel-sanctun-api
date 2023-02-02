
@foreach($users as $data)
<h2>{{$data->name  }}</h2>
<h2>{{$data->user_role->status  }}</h2>

@endforeach
