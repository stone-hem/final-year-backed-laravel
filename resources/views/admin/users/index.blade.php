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
            <h2>User management</h2>
            <table class="rwd-table">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Location</th>
                        <th>Date joined</th>
                        <th>Explore</th>
                    </tr>
                    @foreach ($user as $item)
                        <tr>
                            <td data-th="Name">
                                {{ $item->name }}
                            </td>
                            <td data-th="email">
                                {{ $item->email }}
                            </td>
                            <td data-th="contact">
                                {{ $item->phone_number }}
                            </td>
                            <td data-th="location">
                              {{ $item->location }}
                            </td>
                            <td data-th="Date created">
                              {{ $item->created_at }}
                            </td>
                            <td data-th="action">
                                <a href="#">
                                    <button
                                        style="background: rgb(83, 188, 83); padding:6px 8px; border:none;color:white;">View</button>
                                </a>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h4>developed by I</h4>
        </div>
        <footer class="page-footer">
            <span>made by Hem</span>
        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
