@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h2>Gente</h2>
        <form action="{{route('user.index')}}" method="GET" id="buscador">
            <div class="row buscador">
                <div class="form-group col">
                    <input type="text" id="search" class="form-control">
                </div>
                <div class="form-group col btn-search">
                    <input type="submit" value="Buscar" class="btn btn-success">
                </div>
            </div>
            
        </form>
        <hr>
        @foreach($users as $user)
        <div class="profile-user">      
            <div class="data-user">
            @if($user->image)
                <img src="{{route('user.avatar',['filename' => $user->image])}}" class="avatar">
            @else
                <img src="{{asset('img/unknowimage.jpg')}}" class="avatar">
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
