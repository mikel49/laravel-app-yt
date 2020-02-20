@extends('layouts.app')

@section('content')
<!-- styles -->
<link href="./css/custom.css"rel="stylesheet"type="text/css">
    <div class="row">
        <div class="col-md-9 col-sm-offset-2">
            <h2 align="center" style="margin-top: 30px"><b>Articles</b></h2>
            
            <p align="center"><a href="/posts/create" class="btn btn-primary btn-sm">Nouvel article</a></p>
            @if(count($posts) >= 1)
                @foreach($posts as $post)
                <div class="post-container">
                    
                    <h3 align="center"><b><?php echo ucfirst($post->title);?></b></h3>
                    <hr>
                    <small><b>Posté le {{ $post->created_at->formatLocalized('%A %d/%m/%Y à %Hh %M.' ) }}</b></small>
                    <hr>
                    <p><b><a href="/posts/{{ $post->id }}">Voir l'article...</a></b></p>
                    <hr>
                </div>
                @endforeach
                @else
                    <p>Aucun article existant.</p>
            @endif
            {{ $posts->links() }}
        </div>
    </div>
@endsection