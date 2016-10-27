<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;
use Laracasts\Flash\Flash;
use App\Http\Requests\CategoryRequest;


class CategoriesController extends Controller
{
   public function index(Request $request)
    {
        $categoriesrender = Category::search($request->name)->orderBy('id', 'ASC')->paginate(5);
        
        return view('admin.categories.index')->with('categoriesrender', $categoriesrender);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
     
        return view('admin.categories.create');
        
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
            $category = new Category($request->all());
            $category->save();
            Flash::success("Área registrada");
        
            return redirect()->route('admin.categories.index');
  
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
      
        return view('admin.categories.edit')->with('category', $category);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
     
        $category = Category::find($id);
        $category->fill($request->all());
        $category->slug = null;
        $category->save();
        
        Flash::success('El área se editó con éxito');
       
        return redirect()->route('admin.categories.index');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        
        foreach($category->articles as $article){
            
            foreach($article->images as $image){
                
                 unlink(public_path()."\images\articles\\".$image->image_url);
               /* unlink("/home2/dsistema/public_html/images/articles/".$image->image_url);*/
            }
            
        }
        
        foreach($category->files as $file){
            
           
                
                 unlink(app_path()."\\files\\".$file->file_url);
               /* unlink("/home2/dsistema/public_html/images/articles/".$image->image_url);*/
          
            
        }
        
        $category->delete();
        
        Flash::error('El área ' . $category->name. ' ha sido eliminada');
         
        return redirect()->route('admin.categories.index');
    }
    
  
}
