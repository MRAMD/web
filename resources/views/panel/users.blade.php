<div class="col-md-4"> 
@extends('layouts.panel')
@extends('layouts.app')
@section('content')
@section('menu')

</div>
@foreach($users as $user)
  

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$user->name}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$user->family}}</h6>
    <p class="card-text">{{$user->email}}</p>
    <p class="card-text">{{$id=$user->id}}</p>
    <a href="{{ route('showupdata',['id'=>$id]) }}" class="card-link">updata</a>
    <a href="{{ route('delete',['id'=>$id]) }}" class="card-link">Delete</a>
  </div>
</div>
@endforeach

@endsection
@endsection
