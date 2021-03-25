<?php

use App\Http\Controllers\MailController;
use App\Models\Email;
use App\Models\Subject;
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
    return view('welcome',[
        'subjects'=> Subject::all(),
    ]);
});
Route::get('/emails/all',function(){
    return view('emails',[
        'emails'=>Email::all(),
    ]);
});
Route::post("/send-email", [MailController ::class, "sendEmail"]);
