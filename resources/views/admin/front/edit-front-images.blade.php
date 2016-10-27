@extends('admin.templates.principal')

@section('title', 'Imagenes inicio') 


@section('content') 




<div class="container">

<div class="items">



   
   
    <a href="{{ route('admin.index')}}" class="button button-sm three">Atrás</a>

<hr>
   




<div class="row">
    
    
    
@foreach($images as $i=>$image)


@if($i < 3)
<div class="col-md-4 col-sm-4 col-xs-12 admin-item-content">
@else
<div class="col-md-6 col-sm-6 col-xs-12 admin-item-content">
@endif
<div class="image">
    <img src="/images/front-images/{{$image->image_url}}" alt="">
</div>
<div class="col-md-12">
{!! Form::open(['route' => ['admin.front-images.update', $image->id], 'method' => 'PUT', 'files' => true]) !!}



<div class="form-group">
    
   {!! Form::label('url_to', 'URL a redirigir') !!}
   {!! Form::text('url_to', $image->url_to, ['class' => 'form-control', 'placeholder' => 'www.ejemplo.com/ruta-a-mostrar']) !!}
    
</div>

<div class="form-group">
    
   {!! Form::label('title', 'Título') !!}
   {!! Form::text('title', $image->title, ['class' => 'form-control', 'placeholder' => 'título de la imagen']) !!}
    
</div>

<div class="form-group">
    
    {!! Form::label('sub_title', 'Título') !!}
   {!! Form::text('sub_title', $image->sub_title, ['class' => 'form-control', 'placeholder' => 'título de la imagen']) !!}
    
</div>


<div class="form-group">
    {!! Form::label('image', 'Cargar imagen') !!}
    {!! Form::file('image') !!}
    
</div>
</div>
<div class="col-md-12">
<div class="form-group">
    
    {!! Form::submit('Editar', ['class' => 'button'])!!}
    
</div>

</div>

{!! Form::close() !!}

</div>



 
  @endforeach 
    
    </div>
    
    
    
    
    
  


@endsection