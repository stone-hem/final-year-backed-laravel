<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <style>
        .form-style-2 {
            max-width: 500px;
            padding: 20px 12px 10px 20px;
            font: 13px Arial, Helvetica, sans-serif;
        }

        .form-style-2-heading {
            font-weight: bold;
            font-style: italic;
            border-bottom: 2px solid #ddd;
            margin-bottom: 20px;
            font-size: 15px;
            padding-bottom: 3px;
        }

        .form-style-2 label {
            display: block;
            margin: 0px 0px 15px 0px;
        }

        .form-style-2 label>span {
            width: 100px;
            font-weight: bold;
            float: left;
            padding-top: 8px;
            padding-right: 5px;
        }

        .form-style-2 span.required {
            color: red;
        }

        .form-style-2 .tel-number-field {
            width: 40px;
            text-align: center;
        }

        .form-style-2 input.input-field,
        .form-style-2 .select-field {
            width: 48%;
        }

        .form-style-2 input.input-field,
        .form-style-2 .tel-number-field,
        .form-style-2 .textarea-field,
        .form-style-2 .select-field {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border: 1px solid #C2C2C2;
            box-shadow: 1px 1px 4px #EBEBEB;
            -moz-box-shadow: 1px 1px 4px #EBEBEB;
            -webkit-box-shadow: 1px 1px 4px #EBEBEB;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            padding: 7px;
            outline: none;
        }

        .form-style-2 .input-field:focus,
        .form-style-2 .tel-number-field:focus,
        .form-style-2 .textarea-field:focus,
        .form-style-2 .select-field:focus {
            border: 1px solid #0C0;
        }

        .form-style-2 .textarea-field {
            height: 100px;
            width: 55%;
        }

        .form-style-2 input[type=submit],
        .form-style-2 input[type=button] {
            border: none;
            padding: 8px 15px 8px 15px;
            background: #FF8500;
            color: #fff;
            box-shadow: 1px 1px 4px #DADADA;
            -moz-box-shadow: 1px 1px 4px #DADADA;
            -webkit-box-shadow: 1px 1px 4px #DADADA;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
        }

        .form-style-2 input[type=submit]:hover,
        .form-style-2 input[type=button]:hover {
            background: #EA7B00;
            color: #fff;
        }

        .errors-here {
            color: red;
        }
        .success-here{
          color:green;
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
        <div class="form-style-2">
            <div class="form-style-2-heading">Provide Details information</div>
            @if (session()->has('message'))
                <div class="success-here">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ url('firm/services/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="field1"><span>Service Name<span class="required">*</span></span>
                    <input type="text" class="input-field" name="service_name" value="{{ old('service_name') }}" />
                </label>
                @error('service_name')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label for="field2"><span>Service Image<span class="required">*</span></span>
                    <input type="file" class="input-field" name="service_image"  value="{{ old('service_image') }}"/>
                </label>
                @error('service_image')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label for="field5"><span>Description<span class="required">*</span></span>
                    <textarea name="description" class="textarea-field" value="{{ old('description') }}"></textarea>
                </label>
                @error('description')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label><span> </span>
                    <input type="submit" value="Submit" />
                </label>
            </form>
        </div>
        <footer class="page-footer">
            <span>made by someone</span>
        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
