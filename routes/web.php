<?php

use App\Http\Controllers\UserContorller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


// Route::get('/', function () {
//     return view('welcome');
// });

// MAKING ROUTE greeting:
// Route::get('/greeting', function () {
//     return "Hello Laravel";
// });

// Passing and Getting id:
// Route::get('/greeting/{id}', function (int $id) {
//     return "User id is: " . $id;
// });

// Passing and getting name:
// Route::get('/greeting/{name}', function (string $name) {
//     return "Name is: " . $name;
// });

// Optional Parameters:
// Route::get("/greeting/{name?}", function ($name = null) {
//     return "Name is: " . $name;
// });


// How paramerters should be constraints:
// Small and capital all alphabets are expectable:
// Route::get('/greeting/{name}', function ($name) {
//     return "name is: " . $name;
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{id}', function ($id) {
//     return "id is: " . $id;
// })->where('id', '[0-9]+');

// MULTIPLE PARAMERTERS:
// Route::get('user/{id}/{name}', function ($id, $name) {
//     return "name is: " . $name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// REDIRECT ROUTES:
// Route::redirect('/here', '/there');
// Route::redirect('/here', '/there', 301);

// Route::get('/there', function () {
//     return "Hello, I'm There";
// });

// Route::permanentRedirect('/here', '/there');

// Route::view('/welcome', 'welcome');

// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Route::get('/user/profile', function () {
//     // ... 
//     return "Profile ";
// })->name('profile');

// Route::redirect('/', 'login');

// Route::get('/login', function () {
//     return '<a href="about">about</a>';
// });

// Route::get('/about', function () {
//     return 'About Page';
// });


// Route::get('/greeting', function () {
//     return view('greeting');
// });

// FOR OPENTING VIEW(URL_OR_ROUTE_NAME, VIEW_NAME)
// Route::view('greeting', 'greeting');

Route::get('/greeting', function () {
    // $name = 'Ahmad Fraz';
    // $age = '22';
    // $location = 'Pakistan';

    // PASSING METHOD 1:
    // return view('greeting', ['name' => $name]);
    // return View::make('greeting', ['name' => $name]);

    // return view('greeting', ['name' => $name, 'age' => $age]);

    // METHOD 2:
    // return view('greeting', compact("name", "age"));

    // METHOD 3:
    // return view('greeting')->with('name', $name);
    // return view('greeting')->with([
    //     'name' => $name,
    //     'age' => $age,
    //     'location' => $location,
    //     // Add more variables as needed
    // ]);
});



// Route::get("profile", function () {
//     $name = "Ahmad Fraz";
//     $profileURL = 'https://media.licdn.com/dms/image/D5603AQFfl0nJUN-RgA/profile-displayphoto-shrink_200_200/0/1690615979692?e=1705536000&v=beta&t=1odCy5hWnrngewKNVeRaj_GJrtIBaL3zT3EXT4M-QhI';
//     return view('admin.profile', ['profileURL' => $profileURL, 'name' => $name]);
// });

// Route::get("profile", function() {

// });

// Route::view('master', 'layouts.master');

// Route::view('test', 'test');
// Route::view('post', 'post');
// Route::get('user', [UserContorller::class, 'index']);

// Route::get('user/show/{id}', [UserContorller::class, 'show']);

// Route::resource('photos', PhotoController::class);

// Route::get('connection', function () {
//     try {
//         DB::connection()->getPdo();
//         return "Connected Successfully!";
//     } catch (\Exception $ex) {
//         dd($ex->getMessage());
//     }
// });

// echo phpinfo();

Route::get('test', function () {

    /* 
    
    INSERT INTO DB:
    
    */

    // Post::create([
    //     'title' => 'React 18',
    //     'description' => 'React is very cool',
    //     'is_publish' => false,
    //     'is_active' => false,
    // ]);
    // $posts = Post::all();    // GETING ALL POSTS
    // $post = Post::find(2);   // find post that has id 2
    // $post = Post::findorfail(4);
    // if (!$post) {
    //     return "Post is not found";
    // }

    /* 
    
    FETCHED FROM DB:
    
    */

    // $post = Post::where('title', 'laravel 9')->where('description', 'laravel is very cool')->get();      
    // $post = Post::where(['title' => 'Laravel 9', 'description' => 'Laravel is very cool'])->get();
    // return $post;

    /* 
    
    UPDATE DB:
    
    */

    // FIND POST:
    // $post = Post::find(2);
    // if (!$post) {
    //     return "post not found";
    // }

    // UPDATE POST
    // $post->update([
    //     "title" => 'React JS',
    //     "description" => "React is so Popular",
    // ]);
    // return $post;

    /* 
    
    DELETE RECORD:
    
    */
    // $post = Post::find(1);
    // if (!$post) {
    //     return "Post is not found";
    // } else {
    //     return $post->delete();
    // }

    // return "Deleted Successfully";
});

// Route::get('posts', [OldPostController::class, 'index']);
// Route::get('posts/store', [OldPostController::class, 'store']);
// Route::get('posts/update', [OldPostController::class, 'update']);
// Route::get('posts/delete', [OldPostController::class, 'destroy']);

Route::resource('posts', PostController::class);
