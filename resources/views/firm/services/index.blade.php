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
    @include('layouts.inc.firm-sidebar')
    @section('firm-sidebar')
    @endsection
    <section class="page-content">
        @include('layouts.inc.firm-nav')
        @section('firm-nav')
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
                        <th>ID
                        <th>Service Name
                        <th>Service Description
                        <th>Display Picture
                        <th>current rating
                        <th>Date created
                        <th>edit
                        <th>Delete
                </thead>
                <tbody>
                    @foreach ($service as $item)
                    <tr>
                        <td>{{ $item->id }}
                        <td>{{  $item->name }}
                        <td>{{  $item->description }}
                        <td class="style-image"><img src="{{asset('storage/'.$item->picture)}}" class="image-style" alt="image to be uploaded">
                        <td>{{  $item->rating }}
                        <td>{{  $item->created_at }}
                        <td><button class="btn-primary"> <a href="{{url('edit-brand/'.$item->id)}}">edit</a></button>
                        <td> <button class="btn-danger"> <a href="{{url('delete-brand/'.$item->id)}}">Delete</a></button>
                    @endforeach
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
