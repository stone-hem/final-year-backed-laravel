<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <th>Name
                        <th>Location
                        <th>Recomended?
                        <th>Rating
                        <th>Other details
                        <th>Action
                </thead>
                <tbody>
                    @foreach ($details as $item)
                    <tr>
                        <td>{{  $item->name }}
                        <td>{{  $item->location }}
                        <td>yes
                        <td>{{  $item->rating }}
                        <td>{{  $item->description }}
                        {{-- <td class="style-image"><img src="{{asset('storage/'.$item->picture)}}" class="image-style" alt="image to be uploaded"> --}}
                        <td> <button class="btn-primary"> <a href="{{ url('user/instant/description/'.$item->id) }}">Request Help</a></button>
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
