@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <p>{{ $post->user->name }}</p>
    </div>
    <div class="col-md-8">
        <h4>Comentarios</h4>
        {!! Form::open(['route' => ['comments.store', $post], 'method' => 'POST']) !!}

        {!! Field::textarea('comment') !!}
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-default">
                    Publicar comentario
                </button>
            </div>
        </div>                        
        
        {!! Form::close() !!}
    </div>
    <div class="col-md-4">
        <h4>Comentarios del Post</h4>
        <ul class="list-group">
            @foreach ($comments as $comment )
                <li class="list-group-item">{{ $comment->comment }}</li>
            @endforeach
        </ul
    </div>
    </div>
</div>
    
    
@endsection