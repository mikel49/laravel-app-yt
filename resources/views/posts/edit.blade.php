@extends('layouts.app')

@section('content')
<link href="../css/custom.css"rel="stylesheet"type="text/css"> 
<div class="row">
    <div class="col-md-9 col-sm-offset-2">
        <h2 align="center" style="margin-top: 100px">Edition de article : <?php echo ucfirst($post->title);?></h2>
        <div class="post-container">
            {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST' ]) !!}
        <div class="form-group">
            {{ Form::label('title', 'Titre') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titre de l\'article']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Contenu') }}
            {{ Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Contenu de l\'article']) }}
            <br>
            {{ Form::submit('Suavegarder l\'article', ['class' => 'btn btn-primary btn-sm']) }}
            {{Form::hidden('_method', 'PUT')}}
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
