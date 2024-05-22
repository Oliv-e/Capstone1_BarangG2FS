<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> @yield('title', 'Master') </title>
  @include('admin.layouts.css-style')
</head>
<body>
  @include('admin.components.sidenav')
  @yield('body')
  @include('admin.components.settings')

  @include('admin.layouts.js-scripts')
</body>
</html>