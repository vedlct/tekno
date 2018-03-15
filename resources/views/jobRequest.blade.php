@extends('main')



@section('content')
    <div class="contact_title">
        <h2>Request a Job</h2> <hr>
    </div>
    <div class="container" style="padding-top:30px">

        <div class="form-group">
            <label class="form-input">Please Select Job Request Type :</label>
        </div>
        <select class="form-control input-height" required id="job" name="job" >
            <option value="">SELECT JOB REQUEST</option>
            <option value="brochure">Brochure</option>
            <option value="website">Website</option>
            <option value="leaflet">Leaflet</option>
            <option value="banner">Banner/Flyer</option>
            <option value="corporate">Corporate-CI</option>
            <option value="logo">Logo</option>
            <option value="vector">Vector</option>
        </select>

        <br>
        <div id="element"></div>
    </div>


    <meta name="csrf-token" content="{{ csrf_token() }}" />



    <script>


        $("#job").change(function() {


            var name=$(this).val();

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type:'POST',
                url:"{{ route('getJobForm') }}",
                cache: false,
                data:{'option':name, _token: CSRF_TOKEN},
                success:function(data) {
                     $("#element").html(data);
                    //console.log(data);
                }

            });

        });


    </script>

@endsection