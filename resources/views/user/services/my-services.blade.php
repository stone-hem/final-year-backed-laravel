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
        <div class="container-table">
            <div class="arrange-items">
                <div class="add-another">
                    <a href="">View Pdf</a>
                </div>
                <div class="add-another">
                    <a href=" ">Other Action</a>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID
                        <th>Service Name
                        <th>Service Description
                        <th>Display Picture
                        <th>Firm name
                        <th>DateTime ordered
                        <th>Timer
                        <th>Action
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                    <tr>
                        <td>{{ $item->id }}
                        <td>{{  $item->name }}
                        <td>{{  $item->description }}
                        <td class="style-image"><img src="{{asset('storage/'.$item->picture)}}" class="image-style" alt="image to be uploaded">
                        <td>{{  $item->firm }}
                        <td>{{  $item->created_at->toDayDateTimeString() }}
                        <td>{{  $item->created_at->diffForHumans() }}
                        <td> <button class="btn-danger"> <a href="">Cancel Order</a></button>
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
