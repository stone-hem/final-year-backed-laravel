<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mechanic autos</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylings/table.css') }}">
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
        <div class="container-table">
            <div class="arrange-items">
                <div class="add-another">
                    <a href="">View Pdf</a>
                </div>
                <div class="add-another">
                    <a href="{{ url('firm/services/create') }}">+ Add Service</a>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Title
                        <th>Description
                        <th>Time ordered
                        <th>Client Name 
                        <th>Accept
                        <th>Reject
                </thead>
                <tbody>
                    @if (count($instant)==0)
                    <tr>
                        <td colspan="7"> <h4>Ooops! You have no services yet!</h4>
                    @else
                    @foreach ($instant as $item)
                    <tr>
                        <td>{{ $item->title }}
                        <td>{{ $item->description }}
                        <td>{{ $item->created_at->toDayDateTimeString() }}
                        <td>{{ $item->username }}
                        <td><button class="btn-primary"> <a
                                    href="{{ url('technician/instant/accept') }}">Accept</a></button>
                        <td> <button class="btn-danger"> <a
                                    href="{{ url('technician/instant/reject') }}">Delete</a></button>
                @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <footer class="page-footer">
            <span>made by someone</span>

        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
