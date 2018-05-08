<div class="col-md-4"> 
@extends('layouts.panel')
@extends('layouts.app')
@section('menu')
@endsection

@foreach($comment as $comments)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$comments->body}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$a1=$comments->user_id}}</h6>
    <p class="card-text">{{$a2=$comments->article_id}}</p>
    @foreach($user as $users)
    {{ $b1=$users->name }}
    @endforeach

    
      {{--  {{$id=$articles->id}}  --}}
    {{--  <a href="{{ route('ArticleShowUpdata',['id'=>$id]) }}" class="card-link">updata</a>
    <a href="{{ route('deletearticle',['id'=>$id]) }}" class="card-link">Delete</a>  --}}
  </div>
</div>
@endforeach
</div>