<?php

use Goutte\Client;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

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
})->name('entrada');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas de inicio 
Route::prefix('dashboard/inicio')->group(function () {
    //sidebar
    Route::get('/general', [App\Http\Controllers\InicioController::class, 'general'])->name('general');
    Route::get('/principal', [App\Http\Controllers\InicioController::class, 'principal'])->name('principal');
});

//rutas de productos 
Route::prefix('dashboard/productos')->group(function () {
    //sidebar
    Route::get('/listar', [App\Http\Controllers\ProductoController::class, 'index'])->name('listar');
    Route::get('/crear', [App\Http\Controllers\ProductoController::class, 'create'])->name('crear');
    Route::get('/crear/aliexpress', [App\Http\Controllers\ProductoController::class, 'createAliexpress'])->name('crear/aliexpress');
    Route::get('/crear/aliexpress/detalle/{item}/{precio}', [App\Http\Controllers\ProductoController::class, 'detalleAliexpress'])->name('crear/aliexpress/detalle');

});

//rutas de usuario 
Route::prefix('dashboard/micuenta')->group(function () {
    //sidebar
    Route::get('/miperfil', [App\Http\Controllers\MicuentaController::class, 'miperfil'])->name('miperfil');
    Route::get('/privacidad', [App\Http\Controllers\MicuentaController::class, 'privacidad'])->name('privacidad');
});

//login google y face
Route::get('/login/{driver}', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('social_auth');
Route::get('/login/{driver}/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);

//politicas
Route::prefix('dashboard/politicas')->group(function () {
    //sidebar
    Route::get('/reglas', [App\Http\Controllers\PoliticaController::class, 'reglas'])->name('reglas');
    Route::get('/calculadoraAerea', [App\Http\Controllers\PoliticaController::class, 'calculadoraAerea'])->name('calculadoraAerea');
    Route::get('/aranceles', [App\Http\Controllers\PoliticaController::class, 'aranceles'])->name('aranceles');

});

//Contenedores
Route::prefix('dashboard/contenedores')->group(function () {
    //sidebar
    Route::get('/alquileres', [App\Http\Controllers\ContenedoresController::class, 'alquileres'])->name('alquileres');
    Route::get('/pdf/{desde}/{hasta}/{porcentaje}', [App\Http\Controllers\ContenedoresController::class, 'pdf'])->name('pdf');


});



Route::get('/scraping', function() {
   

   /* $client = new Client();
    $crawler = $client->request('GET', 'https://www.5688.cn/fcl/cnnbo-cliqu');
   
   
    $aver=$crawler->filter('tr')->each(function ($node) {
        dd($node->text()."\n");
        
    });
   
    return view('welcome');*/
    
});