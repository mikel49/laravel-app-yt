@extends('layouts.app')

@section('content')
<!-- styles -->
<link href="../css/custom.css"rel="stylesheet"type="text/css"> 
<div class="row">
    <div class="col-md-9 col-sm-offset-2">
        <div class="post-container" style="margin-top: 50px">
            <h2 align="center" ><b><?php echo ucfirst($post->title);?></h2>
            <hr>
            <small><b>Posté le {{ $post->created_at->formatLocalized('%A %d/%m/%Y à %H h %M') }}.</small>
            <hr>
            <p align="justify"> <?php echo ucfirst($post->body);?></p>
            <hr>
            <a href="/posts" class="btn btn-primary btn-sm">Blog</a>
            @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm">Editer</a>
                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST' ]) !!}
                {{Form::hidden('_method', 'DELETE')}}
                <br>
                <p align="center">{{ Form::submit('Supprimer', ['class' => 'btn btn-danger btn-sm']) }}</p>
                {!! Form::close() !!}
                @endif
            @endif
        </div>
    </div>
</div>
@endsection
