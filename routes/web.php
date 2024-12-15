<?php

use Illuminate\Support\Facades\Route;

///Route::get('/', function () {return view(view: 'welcome');})

route::Get(uri:'/produk', action:function(){
    return view('produk.index');
});


