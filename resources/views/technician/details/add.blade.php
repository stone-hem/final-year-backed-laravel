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
    @include('layouts.inc.technician-sidebar')
    @section('technician-sidebar')
    @endsection
    <section class="page-content">
        @include('layouts.inc.technician-nav')
        @section('technician-nav')
        @endsection
        <div class="form-style-2">
            <div class="form-style-2-heading">Provide Details information</div>
            @if (session()->has('message'))
                <div class="success-here">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ url('technician/details/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="field1"><span>Technician Name<span class="required">*</span></span>
                    <input type="text" class="input-field" name="technician_name" placeholder="name" value="{{ old('technician_name', $details->name??" ") }}" />
                </label>
                @error('technician_name')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label for="field1"><span>Firm Kra Pin<span class="required">*</span></span>
                    <input type="text" class="input-field" name="technician_kra" value="{{ old('technician_kra', $details->kra_pin??"") }}" placeholder="kra.."/>
                </label>
                @error('technician_kra')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label for="technician_contact"><span>Firm Contact<span class="required">*</span></span>
                    <input type="text" class="input-field" name="technician_contact" value="{{ old('technician_contact', $details->phone_number??"") }}" placeholder="phone.." />
                </label>
                @error('technician_contact')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label for="field2"><span>Firm Image<span class="required">*</span></span>
                    <input type="file" class="input-field" name="technician_image"  value="{{ old('technician_image', $details->org_pic??"") }}"/>
                </label>
                @error('technician_image')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label for="field5"><span>Description<span class="required">*</span></span>
                    <textarea name="description" class="textarea-field" placeholder="descritpion.." >
                        {{ old('description', $details->description??"") }}
                    </textarea>
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
