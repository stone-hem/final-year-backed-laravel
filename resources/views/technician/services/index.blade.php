<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic Autos</title>
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
                    <a href="{{ url('technician/services/create') }}">Add Service</a>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Service Name
                        <th>Service Value
                        <th>Service Description
                        <th>Display Picture
                        <th>current rating
                        <th>Date created
                        <th>edit
                        <th>Delete
                </thead>
                <tbody>
                    @if (count($service)==0)
                    <tr>
                        <td colspan="7"> <h4>Ooops! You have no services yet!</h4>
                    @else
                    @foreach ($service as $item)
                    <tr>
                        <td>{{  $item->name }}
                        <td>{{  $item->value }}
                        <td>{{  $item->description }}
                        <td class="style-image"><img src="{{asset('storage/'.$item->picture)}}" class="image-style" alt="image to be uploaded">
                        <td>{{  $item->rating }}
                        <td>{{  $item->created_at->toDayDateTimeString() }}
                        <td><button class="btn-primary"> <a href="{{url('technician/services/edit/'.$item->id)}}">edit</a></button>
                        <td> <button class="btn-danger"> <a href="{{url('technician/services/delete/'.$item->id)}}">Delete</a></button>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <footer class="page-footer">
            <span>made by Hem</span>

        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
