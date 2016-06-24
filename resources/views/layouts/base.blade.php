<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Charlotte and Tommy</title>
  <link rel="stylesheet" href="/stylesheets/app.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Tangerine:400,700|Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />
</head>
<body>
  <header class="header" data-module="nav">
    <button type="button" class="toggle-menu">
      <div class="toggle-menu-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </button>
    <nav>
      <a href="#mass">Mass &amp; Reception</a>
      <a href="#accommodations">Accommodations</a>
      <a href="#registries">Registries</a>
      <a href="#photos">Photos</a>
      <a href="#rsvp">RSVP</a>
    </nav>
  </header>

  @yield('content')

  <footer>
    <div class="wrap">
      <small>
        Made with love from scratch by Tommy for Charlotte<br>
      </small>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="/javascripts/app.js"></script>
</body>
</html>
