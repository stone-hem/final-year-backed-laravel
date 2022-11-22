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
        <h2> My details</h2>

        @if (!$details)
            <p>You have not Updated your details, you won't add services, kindly update now..
                <a href="{{ url('firm/details/create') }}" class="update-firm-details">Update Details</a>
            </p>
        @else
            <div class="profile-card">
                <div class="img">
                    <img src="{{ asset('storage/' . $details->org_pic) }}" class="image-style"
                        alt="image to be uploaded">
                </div>
                <div class="infos">
                    <div class="name">
                        <h2>{{ $details->name }}</h2>
                        <h4>{{ $details->location }}</h4>
                    </div>
                    <p class="text">
                        {{ $details->description }}
                    </p>
                    <ul class="stats">
                        <li>
                            <h3>Kra pin</h3>
                            <h4>{{ $details->kra_pin }}</h4>
                        </li>
                        <li>
                            <h3>Phone</h3>
                            <h4>{{ $details->phone_number }}</h4>
                        </li>
                        <li>
                            <h3>Location</h3>
                            <h4>{{ $details->location }}</h4>
                        </li>
                    </ul>
                    <div class="links">
                        <button class="follow"><a href="{{ url('firm/details/edit/') }}">Update Details</a></button>
                        {{-- <button class="view">View profile</button> --}}
                    </div>
                </div>
            </div>
        @endif
        <footer class="page-footer">
            <span>made by hem</span>
        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
