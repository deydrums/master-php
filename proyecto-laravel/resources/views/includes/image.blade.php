<div class="card pub_image">
    <div class="card-header">
        @if($image->user->image)
        <img src="{{route('user.avatar',['filename' =>$image->user->image])}}">
        @else
        <img src="{{asset('img/unknowimage.jpg')}}">
        @endif
        <div class="user-des">
        <a href="{{route('profile',['id' => $image->user])}}"> {{$image->user->name.' '.$image->user->surname}}
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
            <img src="{{asset('img/hearts-red.png')}}" alt="" data-id="{{$image->id}}" class="btn-dislike">
            @else
            <img src="{{asset('img/hearts-gray.png')}}" alt="" data-id="{{$image->id}}" class="btn-like">
            @endif
            <sapan class="number_likes">{{count($image->likes)}}</sapan>

        </div>

        <div class="comments">
        <a href="{{route('image.detail',['id' => $image->id])}}" class="btn btn-warning btn-comments btn-sm">Comentarios ({{count($image->comments)}})</a>
        </div>
    </div>
</div>