@extends('layouts.base')

@section('content')
  <section class="section -success" id="success">
    <div class="wrap">
      <h1>
        Whoops! 404 Error
      </h1>
      <p>You probably got here by accident.</p>
      <a href="{{ url('/') }}" class="button">❮ Back to Homepage</a>
    </div>
  </section>
@endsection
