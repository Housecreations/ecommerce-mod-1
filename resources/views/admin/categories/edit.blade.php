@extends('admin.templates.principal')


@section('title', 'Editar área ' .$category->name )


@section('content')
<div class="container">
 <div class="items">    

<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        
         <a href="{{ route('admin.categories.index')}}" class="button button-sm">Atrás</a>
        <hr> 
{!! Form::open(['route' => ['admin.categories.update', $category->id], 'method' => 'PUT', 'files' => true]) !!}

<div class="form-group">
    
   {!! Form::label('name', 'Nombre') !!}
   {!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) !!}
    
</div>

<div class="form-group">
    
   <div class="col-md-12">
       
       <img src="/images/categories/{{$category->image_url}}" alt="">
       
   </div>
    
</div>  

<div class="form-group">
    {!! Form::label('image', 'Imagen de la categoría') !!}
    {!! Form::file('image') !!}
    
</div>

<div class="form-group text-center">
    
    {!! Form::submit('Editar', ['class' => 'button'])!!}
    
</div>


{!! Form::close() !!}
</div>
        </div>
</div>
@endsection