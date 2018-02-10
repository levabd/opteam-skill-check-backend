<html>
<head>
  <meta charset="utf-8">
  <title>{{ config('app.name') }}</title>
  <script>
    window.opener.postMessage({ token: "{{ $token }}" , spa_url:"{{$spa_url}}", expires_in: "{{$expires_in}}"}, "{{ url($spa_url) }}")
    window.close()
  </script>
</head>
<body>
</body>
</html>
