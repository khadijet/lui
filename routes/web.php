<?php


use Illuminate\Support\Facades\Route;

Route::get('/log', function () {
    return view('log');

});
Route::get('/welcome', function () {
    return view('welcome');
    
});
Route::get('/accueil', function () {
    return view('accueil');
    
});
Route::get('/sommenous', function () {
    return view('sommenous');
    
});
Route::get('/mission', function () {
    return view('mission');
    
});
Route::get('/president', function () {
    return view('president');
    
});
Route::get('/cong', function () {
    return view('cong');
    
});
Route::get('/inscription', function () {
    return view('inscription');
    
});
Route::get('/menue', function () {
    return view('menue');
    
});
Route::get('/h', function () {
    return view('h');
    
});