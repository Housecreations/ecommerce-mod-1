@extends('admin.templates.principal')
 @if(sizeof($articles)==0)
 @section('title', 'No se encontraron articulos') 
 @else
@section('title', $articles[0]->category->name) 
@endif


@section('content') 
   <div class="container">
    <div class="items col-md-12 col-sm-12 col-xs-12"> 
   
      
    @if(sizeof($articles)==0)
    <ol class="breadcrumb bc text-center">
  <li><a href="/">Inicio</a></li>
<hr>
  
</ol>

<h4 class="text-center">Lo sentimos, no se encontraron artículos</h4>

</div>
     @else
       
      
       <ol class="breadcrumb bc text-center">
  <li><a href="/">Inicio</a></li>

     <li><a href="/articulos">Categorías</a></li>
    <li class="active"> {{$articles[0]->category->name}}</li>
  <hr>
</ol>
       
       <h1 class="text-left categories-title">{{$articles[0]->category->name}}</h1>
       <div class="articles-count"><p>{{$articles[0]->category->articlesCount()}} artículos</p></div>
       
       
     @foreach($articles as $article)
    
    <div class="col-md-6 col-sm-6 col-xs-12 item-content">
    
        
        
        
        
        
        
        
        
    
  
        
   
			    	    
         <a href="{{ route('mostrar.articulo', [$article->category->slug, $article->slug])}}" >
   <div class="grid mask">
                    @if($article->discount > 0)
                    <div class="oferta">{{$article->discount}}% de descuento</div>
                    @endif
						<figure>
							<img class="img-responsive" src="/images/articles/{{$article->images[0]->image_url}}" alt="">
							<figcaption>
								<h5>{{$article->name}}</h5>
								<h5>{{$article->price_now}} {{$currency}}</h5>
								
							</figcaption><!-- /figcaption -->
						</figure><!-- /figure -->
			    	</div><!-- /grid-mask -->
    
        </a>
        
        
        
   
    
        
        
        
        
        
    
    
    
 
   
    </div>
     
    @endforeach
  
  @endif
  
   </div>
   </div>
@endsection