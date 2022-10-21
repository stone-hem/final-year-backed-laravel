<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylings/card.css') }}">
    <style>

    </style>
</head>

<body>
    @include('layouts.inc.user-sidebar')
    @section('user-sidebar')
    @endsection
    <section class="page-content">
        @include('layouts.inc.user-nav')
        @section('user-nav')
        @endsection
        <h2>Firms</h2>
        <div class="card-container" style="display: flex;" >
            @foreach ($firm as $item)
            <div class="card">
                <div class="card-header">
                    <img src="{{asset('storage/'.$item->org_pic)}}" class="image-style" alt="image to be uploaded">
                </div>              
                <div class="card-body">
                    <span class="tag tag-teal">{{ $item->phone_number }}</span>
                    <h4>
                        {{ $item->name }}
                    </h4>
                    <p>
                        {{ $item->description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
            <footer class="page-footer">
                <span>made by hem</span>

            </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
