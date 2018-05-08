 <div class="col-md-4"> 
@extends('layouts.panel')
@extends('layouts.app')
@section('content')
@section('menu')

 @foreach($users as $user)
 {{$id=$user->id}}
 <form method="POST" action="{{route('showupdata',['id'=>$id]) }}">
  {{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
    </div>
    <div class="form-group col-md-6">
      <label for="family">Family</label>
      <input type="text" name="family" class="form-control" id="family" value="{{$user->family}}" >
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}">
  </div>
  <div class="form-group">
    <label for="password">password</label>
    <input type="text" name="password" class="form-control" id="password" value="{{$user->email}}">
  </div>
  <button type="submit" class="btn btn-primary">updata</button>
</form>
@endforeach
@endsection
@endsection
 </div>