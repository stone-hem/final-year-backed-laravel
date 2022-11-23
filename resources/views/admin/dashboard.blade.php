<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic Autos</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
</head>
<body>
    @include('layouts.inc.admin-sidebar')
    @section('admin-sidebar')
    @endsection
      <section class="page-content">
        @include('layouts.inc.admin-nav')
        @section('admin-nav')
        @endsection
        <section class="grid">
          <article></article>
          <article></article>
        </section>
        <footer class="page-footer">
          <span>made by Hem</span>
          
        </footer>
      </section>
      <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>