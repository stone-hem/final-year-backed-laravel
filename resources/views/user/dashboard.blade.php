<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
</head>
<body>
    @include('layouts.inc.user-sidebar')
    @section('user-sidebar')
    @endsection
      <section class="page-content">
        @include('layouts.inc.user-nav')
        @section('user-nav')
        @endsection
        <section class="grid">
          <article></article>
          <article></article>
        </section>
        <footer class="page-footer">
          <span>made by someone</span>
          
        </footer>
      </section>
      <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
