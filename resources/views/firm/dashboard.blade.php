<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylings/dashboard.css') }}">
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
        <div class='dashboard-card__container'>
            <div class='dashboard-card'>
                <h2 class='dashboard-card__title'>
                    Services Alive
                </h2>
                <p class='dashboard-card__detail'>
                    {{ number_format($sum_services) }}
                </p>
            </div>

            <div class='dashboard-card'>
                <h2 class='dashboard-card__title'>
                    Clients Handled
                </h2>
                <p class='dashboard-card__detail'>
                    {{ number_format($sum_cart) }}
                </p>
            </div>

            <div class='dashboard-card'>
                <h2 class='dashboard-card__title'>
                    Earnings
                </h2>
                <p class='dashboard-card__detail'>
                    20,000.00
                </p>
            </div>

            <div class='dashboard-card'>
                <h2 class='dashboard-card__title'>
                    Succesfull books
                </h2>
                <p class='dashboard-card__detail'>
                    {{ number_format($sum_books) }}
                </p>
                <p class='dashboard-card__cta'><a href='#'>View</a></p>
            </div>

            <div class='dashboard-card'>
                <h2 class='dashboard-card__title'>
                    Team Members
                </h2>
                <p class='dashboard-card__detail'>
                    24
                </p>
                <p class='dashboard-card__cta'><a href='#'>Manage</a></p>
            </div>

        </div>

        <div class='dashboard-card__container'>
            <div class='dashboard-card dashboard-card--sm'>
                <h2 class='dashboard-card__title'>
                    Team Members
                </h2>
                <p class='dashboard-card__detail'>
                    24
                </p>
                <p class='dashboard-card__cta'><a href='#'>Manage</a></p>
            </div>

            <div class='dashboard-card dashboard-card--form'>
                <div class='dashboard-card__header'>
                    <h2 class='dashboard-card__title'>
                        Summary
                    </h2>
                    <p class='dashboard-card__detail'>
                        [icon]
                    </p>
                </div>
                <div class='dashboard-card__body'>
                   
                </div>
            </div>

        </div>
        <footer class="page-footer">
            <span>made by someone</span>
        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
