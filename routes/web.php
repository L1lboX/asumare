<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Models\Categoria;
use App\Models\Producto;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\CategoryController;



// Rutas públicas (Login)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

// Rutas protegidas con autenticación
Route::middleware(['auth'])->group(function () {
    // Gestión de usuarios
    Route::resource('user', UserController::class);

    // Gestión de categorías
    Route::resource('categorias', CategoriaController::class);

    Route::resource('productos',ProductosController::class);

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('marcas',MarcaController::class);
// Route::resource('categorias',CategoriaController::class);

// Route::resource('productos',ProductosController::class);
// Route::resource('user',UserController::class);

// //Rutas públicas
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);


// Route::get('/', function () {
//     return view('welcome');
// });


//  //Rutas para usuarios autenticados
// Route::middleware('auth')->group(function () {
//     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//     Route::resource('categorias',CategoriaController::class);
//     Route::resource('productos',ProductosController::class);
//     Route::get('/dashboard', function(){
//         return view('dashboard');
//     })->name('dashboard');
// });



// Route::resource('usuarios',UserController::class);


// Route::get('/inicio', function () {
//     return view('inicio');
// });

// Route::get('/productos',function(){
//     return view('almacen.producto');
// });


// Route::get('/usuario',function(){
//     $nombre = "Juan";
//     return "hola {$nombre}";
// });

// Route::get('/noticia/{titulo}',function($titulo){
//     return "Esta es la Noticia {$titulo}";
// });

// Route::group(['prefix'=>'admin'],function(){
//     Route::get('noticia',function(){
//         return "noticia";
//     });
//     Route::get('evento',function(){
//         return "evento";
//     });
//     Route::get('lavoral',function(){
//         return "lavoral"; 
//     });
// });

// Route::get('database', function(){
//     return env('DB_CONNECTION');
// });

// Route::get('time', function(){
//     return env('APP_TIMEZONE');
// });

// Route::get('locales', function(){
//     return config('app.locale');
// });



// Route::get('categorias', function(){
//     $categorias = Categoria::all();
//     return $categorias;
// });

// Route::get('productos', function(){
//     // $producto = Producto::all();
//     $producto = Producto::with('categoria')->get();
//     return $producto;
// });

// Route::get('categoria/create', function(){

//     $categoria = new Categoria();
//     $categoria->nombre = 'Lacteos';
//     $categoria->save();
//     return $categoria;
// });




