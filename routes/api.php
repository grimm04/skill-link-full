<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('find', function(Illuminate\Http\Request $request){
    $keyword = $request->input('keyword');
    Log::info($keyword);
    $skills = DB::table('provinces')->where('name','like','%'.$keyword.'%')
              ->select('provinces.id','provinces.name')
              ->get();
    return json_encode($skills);
})->name('api.skills');

Route::get('findjob', function(Illuminate\Http\Request $request){
    $keyword = $request->input('keyword');
    Log::info($keyword);
    $skills = DB::table('child_trades')->where('name','like','%'.$keyword.'%')
              ->select('child_trades.id','child_trades.name')
              ->get();
    return json_encode($skills);
})->name('api.skills');