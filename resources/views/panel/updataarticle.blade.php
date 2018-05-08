 <div class="col-md-4"> 
@extends('layouts.panel')
@extends('layouts.app')
@section('content')
@section('menu')

 @foreach($article as $articles)
 {{$id=$articles->id}}
 <form method="POST" action="{{ route('updataarticle',['id'=>$id]) }}">
  {{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">title</label>
      <input type="text" class="form-control" id="title" value="{{$articles->title}}">
    </div>
    <div class="form-group col-md-6">
      <label for="body">Body</label>
      <input type="text" class="form-control" id="body" value="{{$articles->body}}" >
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary">updata</button>
</form>
@endforeach
@endsection
@endsection
 </div>