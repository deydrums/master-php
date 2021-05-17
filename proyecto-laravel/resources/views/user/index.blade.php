@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h2>Gente</h2>
        <hr>
        @foreach($users as $user)
        <div class="profile-user">      
            <div class="data-user">
            @if($user->image)
                <img src="{{route('user.avatar',['filename' => $user->image])}}" class="avatar">
            @endif
            </div>


            <div class="user-info">
                <h2>{{$user->name.' '.$user->surname}}</h2>
                <h3>{{'@'.$user->nick}}</h3>
                <p>{{'Se unio: '.\FormatTime::LongTimeFilter($user->created_at)}}</p>
                <a href="{{route('profile',['id'=>$user->id])}}" class="btn btn-success">Ver Perfil</a>
            </div>
            <div class="clearfix"></div>
            <hr>
        </div>
        @endforeach
        <div class="clearfix"></div>
        {{$users->links()}}
        </div>
    </div>
</div>
@endsection
