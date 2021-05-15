@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('includes.message')

        @foreach($images as $image)
            <div class="card pub_image">
                <div class="card-header">
                    @if($image->user->image)
                    <img src="{{route('user.avatar',['filename' =>$image->user->image])}}">
                    @endif
                    <div class="user-des">
                    <a href="{{route('image.detail',['id' => $image->id])}}"> {{$image->user->name.' '.$image->user->surname}}
                        <span class="nickname">
                            {{'| @'.$image->user->nick}}
                        </span>
                    </a>
                    </div>

                </div>
                <div class="card-body">
                    <div class="image-container">
                        <img src="{{ route('image.file',['filename'=> $image->image_path]) }}" alt="">
                    </div>

                    <div class="description">
                        
                        <span class="nickname">{{'@'.$image->user->nick}}</span>
                        <span class="nickname date">{{' | '.\FormatTime::LongTimeFilter($image->created_at)}}</span>
                        <p>
                            {{$image->description}}
                        </p>
                    </div>

                    <div class="likes">
                        
                        <!--Comprobar si el usuario ha dado like a la imagen -->
                        <?php $user_like = false; ?>
                        @foreach($image->likes as $like)
                            @if($like->user->id == Auth::user()->id)
                            <?php $user_like = true; ?>
                            @endif
                        @endforeach
                        @if($user_like)
                        <img src="{{asset('img/hearts-red.png')}}" alt="" class="btn-dislike">
                        @else
                        <img src="{{asset('img/hearts-gray.png')}}" alt="" class="btn-like">
                        @endif
                        <sapan class="number_likes">{{count($image->likes)}}</sapan>

                    </div>

                    <div class="comments">
                    <a href="" class="btn btn-warning btn-comments btn-sm">Comentarios ({{count($image->comments)}})</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
