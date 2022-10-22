<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylings/profile.css') }}">
    <style>
       .stats{
        display: flex;
        flex-direction: column;
       }
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
        <h2>{{ $firm->name }} Firm Details</h2>
        <div class="profile-card">
            <div class="img">
                <img src="{{ asset('storage/' . $firm->org_pic) }}" class="image-style"
                    alt="image to be uploaded">
            </div>
            <div class="infos">
                <div class="name">
                    <h2>{{ $firm->name }}</h2>
                    <h4>Live from: {{ $firm->created_at }}</h4>
                </div>
                <p class="text">
                    {{ $firm->description }}
                </p>
                <ul class="stats">
                    <li>
                        <h3>Kra Pin</h3>
                        <h4>{{ $firm->kra_pin }}</h4>
                    </li>
                    <li>
                        <h3>firm location</h3>
                        <h4>{{ $firm->location }}</h4>
                    </li>
                    <li>
                        <h3>firm contact</h3>
                        <h4>{{ $firm->phone_number }}</h4>
                    </li>
                </ul>
                <div class="links">
                    <button class="follow"><a href="{{ url('user/firms/services/'.$firm->id) }}" >Our Services</a></button>
                    <button class="view">Rate us</button>
                </div>
            </div>
        </div>
        <footer class="page-footer">
            <span>made by hem</span>

        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
