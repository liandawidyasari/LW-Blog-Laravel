<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('home', [
        "title" => "Home",
        "image" => "me.jpg",
        "summary" => "I have the ability to work with HTML, CSS, PHP, UI/UX and Data Analysis by attending various online trainings and courses. Can work well under pressure and make the best out of any situation. Passionate individual with great interpersonal and communication skills. Can work with team and individual",
        "email" => "liandawidyasari1@gmail.com",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Lianda Widyasari",
        "image" => "me2.jpg",
        "major" => "Informatics Engineering"
    ]);
});


Route::get('/posts',[PostController::class, 'index']);
// Route::get('/certifs',[CertifController::class, 'index']);

//halaman single 
Route::get('/posts{slug}',[PostController::class, 'show']);