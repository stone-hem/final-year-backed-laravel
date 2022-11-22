<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylings/forms.css') }}">
    <style>
       
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
            <div class="form-style-2-heading">Provide service information</div>
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
                <label for="field1"><span>Service Value in Kshs<span class="required">*</span></span>
                    <input type="number" class="input-field" name="service_value" value="{{ old('service_value') }}" />
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
                    <textarea name="description" class="textarea-field" >{{ old('description') }}</textarea>
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
