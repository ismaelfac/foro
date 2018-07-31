{!! Form::open(['method' => 'POST', 'route' => 'post.store']) !!}


{!! Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Esto es una pregunta']) !!}

{!! Form::textarea('content', '',['class' => 'form-control', 'placeholder' => 'Esto es el contenido']) !!}

{!! Form::submit('publicar', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}