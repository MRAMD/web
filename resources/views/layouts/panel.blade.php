

 
 <div class="container">
<div class="card-header">Menu</div> 
<div class="col-md-4">  
                    <ul class="list-group">
                       
                        <li class="list-group-item"><a href="{{ route('index')}}">home</a>
                        <li class="list-group-item"><a href="{{ route('article') }}">articles</a> 
                          <ul><li class="list-group-item"><a href="{{ route('addarticle') }}">ADD Article</li></ul>
                        </li>

                        <li class="list-group-item"><a href="{{ route('comment') }}">comments</a></li>
                        <li class="list-group-item"><a href="{{ route('users') }}">users</a></li>
                        <li class="list-group-item"><a href="{{ route('setting') }}">settings</a></li>
                    </ul>
                    
 </div>  
 @yield('menu')
 </div> 

