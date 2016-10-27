@extends('admin.templates.principal')


@section('title', 'Lista de usuarios')


@section('content')

 <div class="container">    

<div class="items col-md-12 col-sm-12 col-xs-12">
        

<a href="{{ route('admin.index')}}" class="button button-sm">Atrás</a>
<a href="{{ route('admin.users.create')}}" class="button button-md">Registrar nuevo usuario</a>
<hr>



<!-- Buscador de usuarios -->
<div class="row">
{!! Form::open(['route' => 'admin.users.index', 'method' => 'GET', 'class' => 'navbar-form']) !!}
    
    <div class="input-group">
    
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar usuario...', 'aria-describedby' => 'searchUsers']) !!}
    
  
    </div>
</div>
{!! Form::close() !!}
<!-- Fin buscador de usuarios -->

<div>
<table class='table table-hover'>
    
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
       <th>Tipo</th>
        <th>Acción</th>
    </thead>
    <tbody>
       @foreach($users as $user)
           <tr>
               <td>{{$user->id}}</td>
               <td>{{$user->name}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->type}}</td>
               
               
                 <td>
                <a href="{{ route('admin.users.edit', $user->id)}}" class=''><span class='fa-stack fa-lg ' aria-hidden='true'>
                     <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
                    </span></a>
               <a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('Seguro que deseas eliminarlo?')" class=''><span class='fa-stack fa-lg ' aria-hidden='true'>
                     <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-times fa-stack-1x fa-inverse"></i>
                    </span></a></td>
               
           </tr>
       @endforeach 
    </tbody>
    
</table>
<div class="text-center">
    {!! $users->render() !!}
</div>
     </div>

     </div>
</div>
@endsection