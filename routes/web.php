<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    $urls = \AshAllenDesign\ShortURL\Models\ShortURL::latest()->get();
    return view('dashboard', compact('urls'));
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    $urls = \AshAllenDesign\ShortURL\Models\ShortURL::latest()->get();
    return view('dashboard', compact('urls'));
})->middleware(['auth']);

Route::post('/url-short', function () {
    $builder = new \AshAllenDesign\ShortURL\Classes\Builder();

    $shortURLObject = $builder->destinationUrl(request()->url)->make();
    $shortURL = $shortURLObject->default_short_url;

    return back()->with('success','URL shortened successfully. ');

})->name('url.shorten');

Route::post('url-short/{id}', function ($id) {
    $url = \AshAllenDesign\ShortURL\Models\ShortURL::find($id);
    if(request()->has('url')){
        $url->url_key = request()->url;
        $url->destination_url = request()->destination;
        $url->save();
        return back()->with('success','URL updated successfully. ');
    }else{
        return view('welcome');
    }
    
})->name('update');


require __DIR__.'/auth.php';


