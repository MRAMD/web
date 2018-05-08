@extends('layouts.app')




@section('content')

    <!-- Blog Post -->
     @foreach($article as $articles)
    <div class="media">
  <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0">{{ $articles->title }}</h5>
    
    <p class="lead">
       
       ارسال شده توسط <a href="#">{{ $articles->user->name }}</a>
        
    </p>
    
    
    <p><span class="glyphicon glyphicon-time"></span> ارسال شده در تاریخ </p>

    <p>{!! $articles->body !!}</p>
  </div>
</div>
    @endforeach
    {{--  <!-- Blog Comments -->

          <!-- Comments Form -->
    <div class="well">
       
                <!-- Comment -->
        @if(auth()->check())
            <h4>ارسال کامنت :</h4>
            <hr>
            <form role="form" action="{{ route('comment.store' , ['article' => $article->id ]) }}" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="title">متن : </label>
                    <textarea class="form-control" name="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">ارسال</button>
            </form>
        @else
            <a href="/register">برای ارسال کامنت حتما باید عضو وبسایت باشید</a>
        @endif

    </div>   --}}

     {{--  <hr>

    <!-- Posted Comments -->
    @foreach($comments as $comment)
        <div class="media">
            <div class="media-body">
                <h4 class="media-heading">{{ $comment->user->name }}
                    <small>ارسال شده در تاریخ  {{  jdate($article->created_at)->format('%B %d، %Y') }}</small>
                </h4>
                {{ $comment->body }}
            </div>
        </div>
    @endforeach   --}}

    {{--  <!-- Comment -->
    <div class="media">
        <div class="media-body">
            <h4 class="media-heading">علی موسوی
                <small>ارسال شده در تاریخ  فرودین 1396</small>
            </h4>
            لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید-
            <!-- Nested Comment -->
            <div class="media">
                <div class="media-body">
                    <h4 class="media-heading">حسام موسوی
                        <small>ارسال شده در تاریخ  فرودین 1396</small>
                    </h4>
                    لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید
                </div>
            </div>
            <!-- End Nested Comment -->
        </div>  --}}
    </div>

@endsection