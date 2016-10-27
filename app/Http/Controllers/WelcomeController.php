<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\CarouselImage;
use App\Article;
use App\Config;
use App\FrontImage;

class WelcomeController extends Controller
{
    public function index(){
        
    $carousel = CarouselImage::all();
    
    $newArticles = Article::orderBy('id', 'DESC')->take(4)->get();    

    return view('welcome', ['carousel' => $carousel, 'newArticles' => $newArticles, 'currency' => Config::find(1)->currency, 'front_images' => FrontImage::all()]);  
        
        
    }
    
    
}
