@if(Auth::user()->image) 
    <img src="{{route('user.avatar',['filename' => Auth::user()->image])}}" class="avatar">
@else
    <img src="{{asset('img/unknowimage.jpg')}}">
@endif