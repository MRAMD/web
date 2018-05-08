@extends('layouts.panel')
@extends('layouts.app')
@section('content')
@section('menu')

<form action="{{route('savearticle') }}" method="post">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="title">title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Please enter title article">
    </div>
    <div class="form-group">
        <label for="body">body</label>
        <textarea class="form-control" id="body" name="body" placeholder="Please enter body article"></textarea>
    </div>
    
   @foreach($user as $users)
    <input type="hidden" name="user_id" value="{{$users->id}}">
   @endforeach
    <button type="submit" class="btn btn-default">Submit</button>
</form>

@endsection
@endsection