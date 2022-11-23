<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic Autos</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylings/table-2.css') }}">
</head>

<body>
    @include('layouts.inc.admin-sidebar')
    @section('admin-sidebar')
    @endsection
    <section class="page-content">
        @include('layouts.inc.admin-nav')
        @section('admin-nav')
        @endsection
        <div class="container">
            <h2>Firms</h2>
            <table class="rwd-table">
                <tbody>
                    <tr>
                        <th>Firm Name</th>
                        <th>Location</th>
                        <th>Contact</th>
                        <th>Description</th>
                        <th>Owner Email</th>
                        <th>Owner Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($firm as $item)
                        <tr>
                            <td data-th="Name">
                                {{ $item->firm_name }}
                            </td>
                            <td data-th="loaction">
                                {{ $item->location }}
                            </td>
                            <td data-th="contact">
                                {{ $item->phone_number }}
                            </td>
                            <td data-th="description">
                                {{ $item->description }}
                            </td>
                            <td data-th="email">
                                {{ $item->email }}
                            </td>
                            <td data-th="owner name">
                                {{ $item->name }}
                            </td>
                            <td data-th="File">
                                <a href="#">
                                    <button
                                        style="background: rgb(83, 188, 83); padding:6px 8px; border:none;color:white;">More..</button>
                                </a>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div style="height: 40px;"> {{ $firm->links() }}</div> --}}
           
            <h4>developed by Hem</h4>
        </div>
        {{-- {{ $firm->links() }} --}}
        <footer class="page-footer">
            <span>made by Hem</span>
        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
