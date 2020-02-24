@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">
        Go Back
    </a>

    <h1>{{ $post->title }}</h1>

    <img src="/storage/cover_images//{{$post->cover_image}}" style="width: 100%;">
    
    <br>
    <br>

    <section>
        {!! $post->body !!}
    </section>

    <hr>

    <small>
        Written on {{ $post->created_at }}
        by {{ $post->user->name }}
    </small>

    <hr>

    
    @auth
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">
                Edit
            </a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-right'])!!}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endauth
@endsection
