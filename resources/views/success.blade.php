@extends('layouts.base')

@section('content')
  <section class="section -success" id="success">
    <div class="wrap">
      <h1>
        Your RSVP was successfully delivered!
      </h1>
      <a href="{{ url('/') }}" class="button">❮ Back to Homepage</a>
    </div>
  </section>
@endsection
