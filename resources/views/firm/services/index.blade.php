<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <style type="text/css">
        table {
            background: #242e42;
            border-radius: 0.25em;
            border-collapse: collapse;
            margin: 1em;
        }

        th {
            border-bottom: 1px solid #364043;
            color: #E2B842;
            font-size: 0.85em;
            font-weight: 600;
            padding: 0.5em 1em;
            text-align: left;
        }

        td {
            color: #fff;
            font-weight: 400;
            padding: 0.65em 1em;
        }

        .disabled td {
            color: #4F5F64;
        }

        tbody tr {
            transition: background 0.25s ease;
        }

        tbody tr:hover {
            background: #1d2636;
        }
        .arrange-items{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin: 0 20px;
        }
        .image-style{
            width: 100%;
        }
        .btn-primary{
            background-color: green;
            padding: 8px 8px;
        }
        .btn-danger{
            background-color: red;
            padding: 8px 8px;
        }
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
                    <a href="{{ url('firm/services/create') }}">Add Service</a>
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
                        <td><img src="{{asset('assets/services/'.$item->picture)}}" class="image-style" alt="image to be uploaded">
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
