<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Front;
use App\Message;
use App\Category;
use Laracasts\Flash\Flash;
use App\CarouselImage;

use App\Article;
use App\Http\Requests\ImageRequest;

class FrontController extends Controller
{
    
    
    
    
     public function discount(Request $request)     
    {   
         if($request->ajax()){
         $article = Article::find($request->article_id);
         
             if($article->ondiscount == 'yes'){
             $article->ondiscount = 'no';
             $article->save();
      
             return response()->json(['clase'=>'button-discount no-discount', 'texto' => 'Sin descuento' ]);
             }else{
                 $article->ondiscount = 'yes';
                 $article->save();
      
             return response()->json(['clase' => 'button-discount', 'texto' => 'En descuento']);
             }
             }
        
    }
    
    public function featured(Request $request)     
    {   
         if($request->ajax()){
         $article = Article::find($request->article_id);
         
             if($article->featured == 'yes'){
             $article->featured = 'no';
             $article->save();
      
             return response()->json(['clase'=>'button-featured no-featured', 'texto' => 'No destacado' ]);
             }else{
                 $article->featured = 'yes';
                 $article->save();
      
             return response()->json(['clase' => 'button-featured', 'texto' => 'Destacado']);
             }
             }
        
    }
    
  
    
    public function edit()
    {
     
        $images = CarouselImage::all();
        
        return view('admin.front.editcarousel')->with('images', $images);   
            
        
        
    }
    
     public function update(ImageRequest $request, $id)
    {
         
             if($request->file('image')){
            
                $file = $request->file('image');
                $name = 'E-commerce_' .$id. "." . $file->getClientOriginalExtension();
                $path = 'images/slider/';
                $file->move($path, $name);
                
                $image = CarouselImage::find($id);
                $image->image_url = $name;
                $image->url_to = $request->url_to;
                $image->save();
        
                return back();
             
             
             
             }else{
                 
               $image = CarouselImage::find($id);
             
               $image->url_to = $request->url_to;
               $image->save();  

               return back();
             }
            
         }
    
     public function mas()
    {
    
         $image = new CarouselImage();
         $image->image_url = 'default.jpg';
         $image->save();
            
         return back();   
            
        
        
    }
    public function menos()
    {
        $images = CarouselImage::all();
        $image = $images->last();
        $image->delete();
        
        return back();
    
    }
}
