<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Patients;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/test", function () {
    echo "this is a test route";
});

Route::post("/testpost", function () {
    $priority = request()->input("priority");

    $name = request()->input("info.name");

    echo "the priority level is : " . $priority . ", the message is: " . $name;
});



Route::get("/{id}", function ($id) {
    $record = Patients::find($id);
    $item = [];
    $item["id"] = $record["id"];
    $item["firstname"] = $record["firstname"];
    $item["lastname"] = $record["lastname"];
    $item["status"] = $record["status"];

    Log::channel("api")->info("/api/id GET request", [
        "route" => "/api/{id}" . $id,
        "id" => $id,
        "IP" => request()->ip(),
        "item" => $item
    ]);

    return response()->json($item);
});

Route::put("/{id}", function ($id, Request $request) {
    $record = Patients::find($id);

    $record->firstname = $request->input('firstname');
    $record->lastname = $request->input('lastname');
    $record->status = $request->input('status');
    $record->save();



    Log::channel("api")->info("/api/id PUT request", [
        "route" => "/api/{id}" . $id,
        "id" => $id,
        "IP" => request()->ip(),
        "record"=> $record
    ]);    

    return response()->json(["status" => "Item updated"]);
});

Route::delete("/{id}", function ($id, Request $request) {
    $record = Patients::find($id);
    $record->firstname = $request->input('firstname');
    $record->lastname = $request->input('lastname');
    $record->status = $request->input('status');


    Patients::destroy($id);    

    Log::channel("api")->info("/api/id DELETE request", [
        "route" => "/api/{id}" . $id,
        "id" => $id,
        "IP" => request()->ip(),
        "record"=> $record
    ]); 
    return response()->json(["status" => "Item deleted"]);
});
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
Route::post("/", function (Request $request) {
    $patient = new Patients();
    $patient->firstname = $request->input('firstname');
    $patient->lastname = $request->input('lastname');
    $patient->status = $request->input('status');
    $patient->save();

    Log::channel("api")->info("/api POST request", [
        "route" => "/api",
        "IP" => request()->ip(),
        "record"=> $patient
    ]);   
    return response()->json(["status" => "Item inserted successfully"]);
});

Route::put("/", function (Request $request) {
    Patients::truncate();
    $patient = new Patients();
    $patient->firstname = $request->input('firstname');
    $patient->lastname = $request->input('lastname');
    $patient->status = $request->input('status');
    $patient->save();

    Log::channel("api")->info("/api PUT request", [
        "route" => "/api",
        "IP" => request()->ip(),
        "record"=> $patient
    ]);   
    return response()->json(["status" => "Collection replaced"]);
});

Route::delete("/", function (Request $request) {
    Patients::truncate();

    Log::channel("api")->info("/api DELETE request", [
        "route" => "/api",
        "IP" => request()->ip(),
    ]);   
    return response()->json(["status" => "Collection deleted"]);
});

Route::get("/", function () {
    $patients = Patients::all();
    Log::channel("api")->info("/api GET request", [
        "route" => "/api",
        "IP" => request()->ip(),
        "record"=> $patients
    ]); 
    return response()->json($patients);
});
