<?php

Route::get('/', function () {
    return view('home');
});

Route::get('rsvp', function (Illuminate\Http\Request $request) {
    dd($request->all());
});
