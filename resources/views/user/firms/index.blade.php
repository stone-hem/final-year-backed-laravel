<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <style>
        .card-container {
            /* display: flex;
            flex-direction: column;
            width: auto;
            height: ;
            justify-content: space-evenly;
            flex-wrap: wrap; */
        }

        .card {
            margin: 10px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 250px;
        }

        .card-header img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
            min-height: 150px;
        }

        .tag {
            background: #cccccc;
            border-radius: 50px;
            font-size: 12px;
            margin: 0;
            color: #fff;
            padding: 2px 10px;
            text-transform: uppercase;
            cursor: pointer;
        }

        .tag-teal {
            background-color: #47bcd4;
        }

        .tag-purple {
            background-color: #5e76bf;
        }

        .tag-pink {
            background-color: #cd5b9f;
        }

        .card-body p {
            font-size: 13px;
            margin: 0 0 40px;
        }
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
        <div class=".card-container" style="display: flex;" >
            @foreach ($firm as $item)
            <div class="card">
                <div class="card-header">
                    <img src="{{asset('storage/'.$item->org_pic)}}" class="image-style" alt="image to be uploaded">
                </div>              
                <div class="card-body">
                    <span class="tag tag-teal">{{ $item->phone_number }}</span>
                    <h4>
                        {{ $item->name }}
                    </h4>
                    <p>
                        {{ $item->description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
            <footer class="page-footer">
                <span>made by someone</span>

            </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
