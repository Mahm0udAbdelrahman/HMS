@extends('dashboard.layout.app')
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Add Specialties
                            </div>

                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group mb-3">
                                    <select  id="specialty-dropdown" class="form-control">
                                        <option value="">-- Select Specialties --</option>
                                        @foreach ($specialties as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <select id="subspecialty-dropdown" class="form-control">
                                    </select>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#specialty-dropdown').on('change', function () {
                var idSpecialty = this.value;
                $("#subspecialty-dropdown").html('');
                $.ajax({
                    url: "{{url('dashboard/subspecialty')}}",
                    type: "POST",
                    data: {
                        specialty_id: idSpecialty,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#subspecialty-dropdown').html('<option value="">-- Select Subspecialty --</option>');
                        $.each(result.subspecialties, function (key, value) {
                            $("#subspecialty-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });

                    }
                });
            });

            /*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/


        });
    </script>



    @endpush
@endsection
