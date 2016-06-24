<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>RSVP</h1>
  @foreach ($request as $choice => $selection)
    <strong>{{ $choice }}: </strong> {{ $selection }}<br>
  @endforeach
</body>
</html>