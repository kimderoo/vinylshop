<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Record;
use App\Role;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use Cart;

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
    public function product_details($id){
        $record = Record::find($id);
        /*get related records by genre*/
        $related = Record::where('genre_id', $record->genre_id)
                ->where('id', '!=', $record->id)
                ->orderBy('name', 'desc')
                ->get();
        return view('product_details', array('record' => $record,'name'=>$record->name,
            'description'=>$record->description, 'page'=>'records',
            'genres'=>$this->genres, 'records'=>$this->records, 'related' =>$related ));
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
        if(Request::isMethod('post')){
            $record_id = Request::get('record_id');
            $record = Record::find($record_id);
            Cart::add(array('id' => $record_id, 'name' => $record->name, 'qty' => 1, 'price' => $record->price, 'weight' =>0));
        }
        $cart = Cart::content();

        //plus - increment
        if (Request::get('record_id') && (Request::get('increment')) == 1) {
            $item = Cart::search(
                function($key, $value) {
                    return $key->id == Request::get('record_id');
                })->first();
            Cart::update($item->rowId, $item->qty + 1);
        }

        //min - decrease
        if (Request::get('record_id') && (Request::get('decrease')) == 1) {
            $item = Cart::search(function($key, $value) { return $key->id == Request::get('record_id'); })->first();
            Cart::update($item->rowId, $item->qty - 1);
        }

        //delete item
        if (Request::get('record_id') && (Request::get('delete')) == 1) {
            $item = Cart::search(function($key, $value) { return $key->id == Request::get('record_id'); })->first();
            Cart::remove($item->rowId);
        }

        return view('cart',compact('cart'));
    }

    public function clear_cart(){
        Cart::destroy();
        return redirect('cart');
    }

    public function search($query){
        return ("$query search page");
    }

}
