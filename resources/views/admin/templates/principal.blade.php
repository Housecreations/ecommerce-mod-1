<!DOCTYPE html>
<html lang="es">
<head>
<title>@yield('title', 'Default')</title>




<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @yield('meta-tags')
    <meta name="author" content="HouseCreations">
    <meta name="owner" content="HouseCreations">
    
    
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{ asset('css/sl-slide.css')}}">
<link rel="stylesheet" href="{{ asset('css/blue-scheme.css')}}">
<link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css')}}">
	
	@yield('css')
	
	<!-- JavaScripts -->
	<script src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
		<script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.js') }}"></script> 
   
	
	@yield('js-top')
	
	
	 <script src="{{ asset('js/slider/modernizr.min.js')}}"></script>
	
	

</head>

<body style="">
<div id="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
</div>
<!--==============================
              header
=================================-->


    @include('admin.templates.partials.nav') 
    
 
 
<!--=====================
          Content
======================-->
<section id="" class="big-section">
  
    
     
        @include('flash::message')
        @include('admin.templates.partials.errors')
      
        
  
        @yield('content')
     
    
    
</section>

<!--==============================
              footer
=================================-->

<div class="container pre-footer">
    <div class="col-md-12 text-center">
        <div class="col-md-4">
           <img src="{{asset('images/logo.png')}}" alt="Logo">
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="col-md-4">
            
            <h2>Atención al cliente</h2>
            <ul>
            <li><a href="{{url('/como-comprar')}}">¿Cómo comprar?</a></li>
           <li><a href="{{url('/politica-privacidad')}}">Política de privacidad</a></li>
           <li><a href="{{url('/terminos-y-condiciones')}}">Términos y condiciones</a></li>
           <li><a href="{{url('/pagos-y-envios')}}">Pagos y envíos</a></li>
           
           
            </ul>
        </div>
        
        <div class="col-md-4">
            
            <h2>Información de contacto</h2>
            <ul>
            <li>4096 Av Avenida, Maturín, Monagas</li>
           <li>+58 424 900 76 17 </li>
           <li>contacto@housecreations.com.ve</li>
        
           
           
            </ul>
        </div>
    </div>
</div>

<!-- Socialize -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="social-icon" data-wow-delay="0.3s">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
					</ul>
					<p class=" wow fadeInDown">Copyright 2016 &copy;
                    <a rel="nofollow" href="http://www.housecreations.com.ve" target="_blank"><span class="hc">House Creations</span></a></p>
				</div>
			</div>
		</div>
	</footer>


    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script src="{{ asset('js/min/plugins.min.js') }}"></script>
<script src="{{ asset('js/medigo-custom.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
    
     
   
    
    @yield('js')
    
     
   
    <script>
$('div.alert').not('.alert-important').delay(3000).slideUp(350);
</script>
 
  

</body>
</html>