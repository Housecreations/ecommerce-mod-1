@extends('admin.templates.principal')


@section('title', 'Imágenes ' .$article->name )


@section('content')

<div class="container">
<div class="items">    

<div class="col-md-10 col-md-offset-1">
    
   
    <a href="{{ route('admin.articles.index')}}" class="button button-sm">Atrás</a>
   <hr>
   

   
    
    {!! Form::open(['route' => ['admin.articles.images.new', $article->id], 'method' => 'POST', 'files' => true]) !!}
    
    <div class="form-group">
    {!! Form::label('image', 'Imagen del artículo') !!}
    {!! Form::file('image') !!}
    
</div>
    <div class="form-group">
    
    {!! Form::submit('Agregar nueva imagen', ['class' => 'button button-lg'])!!}
    
</div>


{!! Form::close() !!}
<hr>    
    @foreach($article->images as $image)
    <div class="col-md-4  col-sm-6 col-xs-12">
{!! Form::open(['route' => ['admin.articles.images.delete', $article->id, $image->id], 'method' => 'DELETE']) !!}


    <div class="image">
        
        <img src="/images/articles/{{$image->image_url}}" alt="">
        
    </div>



<div class="form-group">
    
    {!! Form::submit('Eliminar', ['class' => 'button'])!!}
    
</div>


{!! Form::close() !!}
</div>
@endforeach
    </div>
</div>
</div>
@endsection