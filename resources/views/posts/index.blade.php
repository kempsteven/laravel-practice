@extends('layouts.app')

@section('content')
    <h1>
        Post
    </h1>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="alert alert-dark">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images//{{$post->cover_image}}" style="width: 100%;">
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <h3>
                            <a href="/posts/{{$post->id}}">
                                {{$post->title}}
                            </a>
                        </h3>

                        <small>
                            Written on {{$post->created_at}}
                            by {{ $post->user->name }}
                        </small>
                    </div>
                </div>
            </div>
        @endforeach

        {{ $posts->links() }}
    @else
        <p>
            No Posts Found
        </p>
    @endif
@endsection
