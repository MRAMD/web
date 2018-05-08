 
<div class="col-md-4"> 
@extends('layouts.app')
@extends('layouts.panel')

@section('menu')
@endsection

@foreach($article as $articles)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$articles->title}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$articles->user_id}}</h6>
    <p class="card-text">{{$articles->created_at}}</p>
    <p class="card-text">{{$articles->body}}</p>
      {{$id=$articles->id}}
    <a href="{{ route('ArticleShowUpdata',['id'=>$id]) }}" class="card-link">updata</a>
    <a href="{{ route('deletearticle',['id'=>$id]) }}" class="card-link">Delete</a>
  </div>
</div>

@endforeach

</div>