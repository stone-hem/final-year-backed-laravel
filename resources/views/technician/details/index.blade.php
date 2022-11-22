<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic autos</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylings/profile.css') }}">
    <style>
        .details-style {
            display: flex;
            flex-direction: column;
        }

        .update-firm-details {
            margin-top: 20px;
            background-color: #FF8500;
            padding: 8px 8px;
            width: 13%;
        }

        .update-firm-details:hover {
            background-color: #EA7B00;
        }
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
        <h2> My details</h2>

        @if (!$details)
            <p>You have not Updated your details, do so now.. <a href="{{ url('technician/details/create/') }}">Update
                    Details</a> </p>
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
                        <button class="follow"><a href="{{ url('technician/details/edit/') }}">Update Details</a></button>
                        {{-- <button class="view">View profile</button> --}}
                    </div>
                </div>
            </div>
        @endif
        <footer class="page-footer">
            <span>made by Hem</span>
        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
