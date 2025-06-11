<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>LATIHAN LARAVEL</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 20px; }
    input { padding: 6px; margin: 4px; width: 200px; }
    button { padding: 6px 10px; margin: 4px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    th { background-color: #f2f2f2; }
  </style>
</head>
<body>
  @yield('body')

  @stack('js')
</body>
</html>
