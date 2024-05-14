<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBuilderController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordReset;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;


Route::get("/setsession", function () {
    session(["username" => "ahmetaydo"]);
    echo "username set";
});

Route::get("/getsession", function () {
    $username = session("username", "not set yet");
    echo "Username: " . $username . "<br />";
});

Route::middleware(['auth'])->group(function () {
    Route::get("/listbuilder", [ListBuilderController::class, 'displayPage'])->name("listbuilder");
    Route::post("/newitem", [ListBuilderController::class, 'newItem']);
    Route::get("/saveitem", [ListBuilderController::class, 'saveItems']);
    Route::get("/clearList", [ListBuilderController::class, 'clearList']);
    Route::get("/", [ListBuilderController::class, 'displayPage'])->name("home");

    Route::get("/emailitem", function() {
        $user = Auth::user();
    
        $items = $user->items;
    
        $data = [
            "items" => $items,
            "username" => $user->username,
            "name" => $user->name
        ];
    
        Mail::to($user->email)->send(new PasswordReset($data));    
        echo "List of items email sent";    
        return view("emailList", $data);
    });
});


Route::controller(UserAuthController::class)->group(function () {
    Route::get("/register", "displayRegisterPage")->middleware('guest');
    Route::get("/login", "displayLoginPage")->name("login")->middleware('guest');
    Route::post("/attempt_register", "registerUser");
    Route::post("/attempt_login", "authenticate");
    Route::get("/logout", "logout");
});



Route::get("/new_password", function () {
    return view("newpassword");
});
