<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <style>
       .details-style{
        display: flex;
        flex-direction: column;
       }
       .update-firm-details{
        margin-top: 20px;
        background-color: #FF8500;
        padding: 8px 8px;
        width:13%;
       }
       .update-firm-details:hover{
        background-color: #EA7B00;
       }
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
        <h2> My details</h2>
     
      @if(!$details)
    <p>You have not Updated your details, do so now.. <a href="{{ url('firm/details/create') }}">Update Details</a> </p>
@else
    <div class="details-style">
        <span>
            Firm Name: {{ $details->name }}
        </span>
<span>Firm Description: {{ $details->description }} </span>
<span>Firm Kra: {{ $details->kra_pin }}</span>
<span>Firm Location: {{ $details->location }}</span>
<span>Firm Contact: {{ $details->phone_number }}</span>
<span>Firm Profile Picture: {{ $details->org_pic }}</span>
<a href="{{ url('firm/details/create/') }}" class="update-firm-details">Update Details</a>
    </div>
@endif
        <footer class="page-footer">
            <span>made by someone</span>
        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
