<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylings/cart-items.css') }}">
    <style type="text/css">
   
    </style>

</head>

<body>
    @include('layouts.inc.technician-sidebar')
    @section('technician-sidebar')
    @endsection
    <section class="page-content">
        @include('layouts.inc.technician-nav')
        @section('technician-nav')
        @endsection
        <div style="display: flex; align-items:center; justify-content:center;">
        <ol class="list">
            @if (count($cart)==0)
                <h3>Oops! No Pending requests</h3>
            @else
            @foreach ($cart as $item)
            <li class="item">
                <h2 class="headline">{{ $item->name }}</h2>
                <span>
                    {{ $item->description }}
                </span>
                <h4>Client Details</h4>
                <ol>
                    <li><b>Email:</b> {{ $item->email }}</li>
                    <li><b>Phone:</b> {{ $item->phone_number }}</li>
                    <li><b>Location:</b> {{ $item->location }}</li>
                    <li><b>name:</b> {{ $item->username }}</li>
                    <li><b>id:</b> {{ $item->id_number }}</li>
                    <li><b>Gender:</b> @if ($item->gender==1)
                        male
                        @else
                        female
                    @endif</li>
                </ol>
                <a href="{{ url('technician/cart/pending'.$item->id) }}" class="accept-service">Pending</a>
            </li>
            @endforeach
            @endif
           
        </ol>
    </div>
        <footer class="page-footer">
            <span>made by hem</span>

        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
