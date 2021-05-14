@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('includes.message')

        @foreach($images as $image)
            <div class="card">
                <div class="card-header">
                    @if($image->user->image)
                    <img src="{{route('user.avatar',['filename' =>$image->user->image])}}">
                    @endif
                    <div class="user-des">
                    {{$image->user->name.' '.$image->user->surname.' | @'.$image->user->nick}}
                    </div>
                </div>
                <div class="card-body">

                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
