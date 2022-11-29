<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic autos</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylings/table.css') }}">
    <style type="text/css">
       
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
        <h2>Select a firm/technician</h2>
        <div class="container-table">
            <table>
                <thead>
                    <tr>
                        <th>Title
                        <th>desciption
                        <th>firm/technician
                        <th>My location
                        <th>Action
                </thead>
                <tbody>
                    @foreach ($instant as $item)
                    <tr>
                        <td>{{  $item->title }}
                        <td>{{  $item->description }}
                        <td>{{  $item->name }}
                        <td>{{  $item->user_current_location }}
                        <td> <button class="btn-danger"> <a href="{{ url('user/instant/delete/'.$item->id) }}">Cancel</a></button>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="page-footer">
            <span>made by hem</span>

        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
