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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('contact/email', function (\Illuminate\Http\Request $request){
    $name = $request->get('fullname');
    $email = $request->get('email');
    $message = $request->get('message');
    \Illuminate\Support\Facades\Mail::to('info@mariecare.org')->send(new \App\Mail\ContactMariecare($name, $email, $message));

    return redirect('/contact')->withSuccess('Message was successful!');

})->name('send-email');