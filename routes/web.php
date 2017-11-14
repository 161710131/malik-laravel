<?php

Route::get('/', function () {
    return view('welcome');
});
 route::get('/about/1',function(){
 return '<h1>halo ini halaman 1</h1>'
 .'selamat datang di web app saya <br>'
 .'laravel, emang keren.';
 });
 route::get('/about/2',function(){
 return '<h1>halo ini halaman 2</h1>'
 .'selamat datang di web app saya <br>'
 .'laravel, emang keren.';
 });
 route::get('/about/3',function(){
 return '<h1>halo ini halaman 3</h1>'
 .'selamat datang di web app saya <br>'
 .'laravel, emang keren.';
 });
 route::get('/about/4',function(){
 return '<h1>halo ini halaman 4</h1>'
 .'selamat datang di web app saya <br>'
 .'laravel, emang keren.';
 });
 route::get('/about/5',function(){
 return '<h1>halo ini halaman 5</h1>'
 .'selamat datang di web app saya <br>'
 .'laravel, emang keren.';
 });
route::get('/about/{malik} ', function($k){
  return 'halo ini halaman'.$k.'';
 });
Route::get('mfr', function() {
    return view('thuer');
});
Route::get('/kantin/{makan}/{minum}/{cemilan}', function($a,$b,$c) {
    return '<h1>PESANAN</h1>'.
           'makannya :'.$a.'<br> 
            minumnya :'.$b.'<br> 
            cemilan  :'.$c;
});
route::get('/user/{nama?} ', function($name = 'malik'){
  return 'nama saya :'.$name;
 });