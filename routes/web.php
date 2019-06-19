<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*front routes*/
Route::get('/', 'HomeController@index');
Route::get('/products', 'HomeController@products');
Route::get('/products/details/{id}', 'HomeController@product_details');
Route::get('/products/categories', 'HomeController@product_categories');
Route::get('/products/brands', 'HomeController@product_brands');
Route::get('/blog','HomeController@blog');
Route::get('/blog/post/{id}', 'HomeController@blog_post');
Route::get('/register', 'HomeController@register')->name('register');
Route::get('/login', 'HomeController@login');
Route::get('/logout', 'HomeController@logout');
Route::get('/checkout', 'HomeController@checkout');
Route::get('/cart', 'HomeController@cart');
Route::post('/cart','HomeController@cart');
Route::get('/clear-cart', 'HomeController@clear_cart');
Route::get('/search/{query}','HomeController@search');
Route::get('/complete','OrdersController@index')->name('complete');




/*auth routes*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'DashboardController@index');



Route::group(['middleware'=>'auth','prefix' => 'admin'],function(){
    /*resource routes*/
    Route::resource('users','AdminUsersController');
    Route::resource('roles','RolesController');
    Route::resource('records','RecordsController');
    Route::resource('genres','GenresController');
});


Route::post('/checkout', function(){
    $gateway = new Braintree\Gateway([
        'environment' => config('services.braintree.environment'),
        'merchantId' => config('services.braintree.merchantId'),
        'publicKey' => config('services.braintree.publicKey'),
        'privateKey' => config('services.braintree.privateKey')
    ]);

    $amount = request()->amount;
    $nonce = request()->payment_method_nonce;
    /***betaling transactie zelf**/
    $result = $gateway->transaction()->sale([
        'amount' => $amount,
        'paymentMethodNonce' => $nonce,
        'options' => [
            'submitForSettlement' => true
        ],

    ]);
    /** gegevens van de klant bewaren in de vault van braintree***/
    $result2 = $gateway->customer()->create([
        'firstName' => 'Mike',
        'lastName' => 'Jones',
        'company' => 'Jones Co.',
        'email' => 'mike.jones@example.com',
        'phone' => '281.330.8004',
        'fax' => '419.555.1235',
        'website' => 'http://example.com'
    ]);// keuze ofwel naar braintree ofwel naar tabel in database

    if ($result->success) {
        $transaction = $result->transaction;
        // header("Location: transaction.php?id=" . $transaction->id);
        $mytransaction = 'Transaction success. The ID is:'. $transaction->id;
        $cart = Cart::content();
        return view('complete',compact('mytransaction', 'cart'));
    } else {
        $errorString = "";
        foreach($result->errors->deepAll() as $error) {
            $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
        }
        //$_SESSION["errors"] = $errorString;
        //header("Location: " . $baseUrl . "index.php");
        return back()->withErrors('An error occurred with the message: '.$result->message);
    }


});