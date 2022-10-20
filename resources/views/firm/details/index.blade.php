<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <style>
       .details-style{
        display: flex;
        flex-direction: row;
       }
    </style>
</head>

<body>
    @include('layouts.inc.firm-sidebar')
    @section('firm-sidebar')
    @endsection
    <section class="page-content">
        @include('layouts.inc.firm-nav')
        @section('firm-nav')
        @endsection
      My details
      @if(!$details)
    <p>You have not Updated your details, do so now.. <a href="{{ url('firm/details/create') }}">Update Details</a> </p>
@else
    <div class="details-style">
Firm Name: {{ $details->name }}
    </div>
@endif
        <footer class="page-footer">
            <span>made by someone</span>
        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
