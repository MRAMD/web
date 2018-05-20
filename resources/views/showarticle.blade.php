@extends('layouts.app')




@section('content')


    Blog Post
     @foreach($article as $articles)
 
     

    <div class="media">
  <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
  <div class="media-body">
    
  {!! $articles->title !!}
    <p class="lead">
       
       ارسال شده توسط <a href="#">{{ $articles->user[0]->name}}</a>
        
    </p>
        <p><span class="glyphicon glyphicon-time"></span> ارسال شده در تاریخ:{{ $articles->created_at  }} </p>
    <p>{!! $articles->body !!}</p>
  </div>
  {{$id=$articles->id}}
</div>
   
<div  class="media-body">
@foreach($article as $articles)
     <p>متن نظر: {{$articles->comment[0]->body}}</p>
     <p>ارسال شده توسط :{{ $articles->user[0]->name}}</p>
     <p>ارسال شده در تاریخ : {{$articles->comment[0]->created_at }}</p>
   @endforeach
    </div> 


   <div class="well">
            <h4>ارسال کامنت :</h4>
            <hr>
            <form role="form" action="{{ route('send.comment',['id'=>$id]) }}" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title">متن : </label>
                    <textarea class="form-control" name="body" rows="3"></textarea>
                    <input type="hidden" name="user_id" value="{{$articles->user[0]->id}}">
                    <input type="hidden" name="article_id" value="{{Auth::id()}}">
                  
                <button type="submit" class="btn btn-primary">ارسال</button>
            </form>
            <a href="/register">برای ارسال کامنت حتما باید عضو وبسایت باشید</a>
    </div>    
@endforeach

@endsection