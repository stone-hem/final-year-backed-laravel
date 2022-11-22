<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mechanic autos</title>
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
            <div class="form-style-2-heading">Edit My Profile information</div>
            <form action="{{ url('firm/details/update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="field1"><span>Firm Name<span class="required">*</span></span>
                    <input type="text" class="input-field" name="firm_name"
                        value="{{ old('firm_name', $check_detail->name ?? ' ') }}" />
                </label>
                @error('firm_name')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label for="field1"><span>Firm Kra Pin<span class="required">*</span></span>
                    <input type="text" class="input-field" name="firm_kra"
                        value="{{ old('firm_kra', $check_detail->kra_pin ?? ' ') }}" />
                </label>
                @error('firm_kra')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label for="firm_contact"><span>Firm Contact<span class="required">*</span></span>
                    <input type="text" class="input-field" name="firm_contact"
                        value="{{ old('firm_contact', $check_detail->phone_number ?? ' ') }}" />
                </label>
                @error('firm_contact')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label for="field2"><span>Firm Image<span class="required">*</span></span>
                    <input type="file" class="input-field" name="firm_image"
                        value="{{ old('firm_image', $check_detail->org_pic ?? ' ') }}" />
                </label>
                @error('firm_image')
                    <div class="errors-here">{{ $message }}</div>
                @enderror
                <label for="field5"><span>Description<span class="required">*</span></span>
                    <textarea name="description" class="textarea-field">
                        {{ old('description', $check_detail->description ?? ' ') }}
                    </textarea>
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
            <span>made by someone</span>
        </footer>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
