@extends('layouts.app')

@section('content')
<!-- styles -->
<link href="./css/custom.css"rel="stylesheet"type="text/css">
<div class="container">
    <div class="row">
        <!--<div class="col-md-9 col-md-offset-2">
            <div class="panel panel-default">-->
                <!--<div class="panel-heading" style="margin-top: 30px" align="center">Tableau de bord.</div>-->
                <h2 align="center" style="margin-top: 30px"><b>Tableau de bord.</b></h2>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p align="center"><a href="/posts/create" class="btn btn-primary btn-sm" style='margin-bottom: 15px'>
                        Créer un nouvel article.
                    </a></p>
                    <hr>
                    <div class="post-container">
                    <h3  align="center"><b> Vos articles.</b></h3>
                    
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Article.</th>
                            <th>Editer.</th>
                            <th>Supprimer.</th>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td><b><?= ucfirst($post->title);?></td>
                            <td><a href="/posts/{{ $post->id}}/edit" class="btn btn-primary btn-sm">Editer l'article</a> </td>
                            <td>
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Supprimer', ['class' => 'btn btn-danger btn-sm'])}}
                                {!!Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                       <p>Vous n'avez publié aucun article.</p>
                    @endif  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
