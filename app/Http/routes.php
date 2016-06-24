<?php

Route::get('/', function () {
    return view('home');
});

Route::get('success', function () {
    return view('success');
});

Route::post('rsvp', function (Illuminate\Http\Request $request) {
    $answers = collect($request->all())->reject(function($input, $key) {
        return in_array($key, ['_method', '_token']);
    });

    \Mail::send('emails.rsvp', ['request' => $answers->all()], function ($m) use ($answers) {
        $m->from('postmaster@charlotteandtommy.com', 'CharlotteAndTommy.com');
        $m->to('tommyjmarshall@gmail.com', 'Tommy Marshall');
        $m->cc('cpince88@gmail.com', 'Charlotte Pince');
        $m->subject($answers->get('name') . ' has RSVPed!');
    });

    return redirect('success');
});
