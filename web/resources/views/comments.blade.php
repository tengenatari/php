@extends('index')

@section('body')

    @foreach($comments as $comment)
        <div class="form-floating">
            <div class="form-control" id="floatingInputValue{{$comment->id}}">{{$comment->text}}</div>
            <label for="floatingInputValue{{$comment->id}}">{{App\Models\User::find($comment->user_id)->name}} написал {{$comment->created_at}}</label>
        </div>

    @endforeach
    @if(Auth::check())
        <form method="POST" action="/create/comment"><input name="id" value="{{$card->id}}" type="Hidden"><input class ="form-control m-2" name="text" type="text" ><button class="btn btn-primary" type="submit">@csrf send</button></form>
    @endif
@endsection
