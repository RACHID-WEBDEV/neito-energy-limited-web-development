<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;

class PagesController extends Controller
{
    public function index(){

        $posts =  Post::orderBy("id", "desc")->take(3)->get();
        return view('pages.index')->with('posts', $posts);
      
        //return view('pages.index');
    }


   public function about(){
        
    return view('pages.about');

    }
    public function services(){
        
        return view('pages.services');
    
    }
    public function portfolio(){
        
        return view('pages.portfolio');
    
    }
    public function contact(){
        
        return view('pages.contact');
    
    }
    public function petroleum(){
        
        return view('pages.petroleum-trading');
    
    }
    public function retailing(){
        
        return view('pages.products-retailing');
    
    }
    public function marketing(){
        
        return view('pages.petroleum-marketing');
    
    }
    public function logistics(){
        
        return view('pages.logistics');
    
    }
    public function additionalservice(){
        
        return view('pages.additional-service');
    
    }
   

}


