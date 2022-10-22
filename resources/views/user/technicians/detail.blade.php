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
        <h2>{{ $technician->name }} Technician Details</h2>
        <div class="profile-card">
            <div class="img">
                <img src="{{ asset('storage/' . $technician->org_pic) }}" class="image-style"
                    alt="image to be uploaded">
            </div>
            <div class="infos">
                <div class="name">
                    <h2>{{ $technician->name }}</h2>
                    <h4>Live from: {{ $technician->created_at }}</h4>
                </div>
                <p class="text">
                    {{ $technician->description }}
                </p>
                <ul class="stats">
                    <li>
                        <h3>Kra Pin</h3>
                        <h4>{{ $technician->kra_pin }}</h4>
                    </li>
                    <li>
                        <h3>technician location</h3>
                        <h4>{{ $technician->location }}</h4>
                    </li>
                    <li>
                        <h3>technician contact</h3>
                        <h4>{{ $technician->phone_number }}</h4>
                    </li>
                </ul>
                <div class="links">
                    <button class="follow"><a href="{{ url('user/firms/services/'.$technician->id) }}" >Our Services</a></button>
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
