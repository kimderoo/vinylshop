<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Record;
use App\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    var $genres;
    var $roles;
    var $records;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->genres = Genre::all(array('name'));
        $this->roles = Role::all(array('name'));
        $this->records = Record::all();
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $genres = Genre::all();
        $records = Record::orderBy('id','desc')->get();
        return view('home', compact('records','genres'));
    }
    public function products(){
        return view('products');
    }
    public function product_details(){
        return view('product_details');
    }
    public function product_categories(){
        return view('products');
    }
    public function product_brands(){
        return view('products');
    }
    public function blog(){
        return view('blog');
    }
    public function blog_post($id){
        return view('blog_post');
    }
    public function contact_us(){
        return view('contact_us');
    }
    public function welcome(){
    }
    public function cart(){
        return view('cart');
    }
    public function search($query){
        return ("$query search page");
    }

}
