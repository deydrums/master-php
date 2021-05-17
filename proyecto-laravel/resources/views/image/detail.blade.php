@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        @include('includes.message')
            <div class="card pub_image pub_image_detail">
                <div class="card-header">
                    @if($image->user->image)
                    <img src="{{route('user.avatar',['filename' =>$image->user->image])}}">
                    @endif
                    <div class="user-des">
                    {{$image->user->name.' '.$image->user->surname}}
                        <span class="nickname">
                            {{'| @'.$image->user->nick}}
                        </span>
                    </div>

                </div>
                <div class="card-body">
                    <div class="image-container image-detail">
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
                        <img src="{{asset('img/hearts-red.png')}}" alt="" data-id="{{$image->id}}" class="btn-dislike">
                        @else
                        <img src="{{asset('img/hearts-gray.png')}}" alt="" data-id="{{$image->id}}" class="btn-like">
                        @endif
                        <sapan class="number_likes">{{count($image->likes)}}</sapan>

                    </div>
                    @if(Auth::user() && Auth::user()->id == $image->user->id)
                    <div class="actions">
                        <a href="" class="btn btn-sm btn-primary">Editar</a>
                        <a href="{{route('image.delete',['id'=>$image->id])}}" class="btn btn-sm btn-primary">Borrar</a>
                    </div>
                    @endif
                    <div class="clearfix"></div>
                    <div class="comments">
                        <h2>Comentarios ({{count($image->comments)}})</h2>
                        <hr>
                        <form action="{{route('comment.save')}}" method="POST">
                            @csrf
                            <input type="hidden" name="image_id" value="{{$image->id}}">

                            <p>
                                <textarea class="form-control {{$errors->has('content')?'is-invalid' : ''}}" name="content" required></textarea>
                                @if($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$errors->first('content')}}</strong>
                                    </span>
                                @endif
                            </p>

                            <button type="submit" class="btn btn-success">
                                Enviar
                            </button>

                        </form>
                        <hr>
                        @foreach ($image->comments as $comment)
                            <div class="comment">
                                    <span class="nickname">{{'@'.$comment->user->nick}}</span>
                                    <span class="nickname date">{{' | '.\FormatTime::LongTimeFilter($comment->created_at)}}</span>
                                    <p>
                                        {{$comment->content}}
                                        <br>
                                        @if(Auth::check() && ($comment->user_id == Auth::user()->id) || $comment->image->user_id == Auth::user()->id)
                                        <a href="{{route('comment.delete',['id'=>$comment->id])}}" class="btn btn-sm btn-danger">
                                            Eliminar 
                                        </a>
                                        @endif
                                    </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
