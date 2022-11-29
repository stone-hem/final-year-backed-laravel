<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic autos</title>
    <link rel="stylesheet" href="{{ asset('stylings/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stylings/forms.css') }}">
    <style>
       
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
        <div class="form-style-2">
            <div class="form-style-2-heading">Briefly address Your Issue to {{ $details->name }} </div>
            @if (session()->has('info'))
                <div class="errors-here">
                    {{ session()->get('info') }}
                </div>
            @endif
            <form action="{{ url('user/instant/description/post/'.$details->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="field1"><span>Issue Title<span class="required">*</span></span>
                    <input type="text" class="input-field" name="title" value="{{ old('title') }}" />
                </label>
                @error('title')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
               
                {{-- <label for="field2"><span>Service Image<span class="required">*</span></span>
                    <input type="file" class="input-field" name="service_image"  value="{{ old('service_image') }}"/>
                </label>
                @error('service_image')
                    <div class="errors-here">{{ $message }}</div>
                @enderror --}}
                <label for="field5"><span>Description<span class="required">*</span></span>
                    <textarea name="description" class="textarea-field" >{{ old('description') }}</textarea>
                </label>
                @error('description')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label><span> </span>
                    <input type="submit" value="Submit" />
                    <span>
                        @if (session()->has('message'))
                            <div class="success-here">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </span>
                </label>
            </form>
        </div>
        <footer class="page-footer">
            <span>made by Hem</span>
        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
