@extends('dashboard.layout.app')
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Add setting
                            </div>

                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.employees.store') }}" enctype="multipart/form-data">
                                @csrf


                                @if(App::getLocale()=='en')
                                <img  id="img-prv" width="250px" height="250px" src="" alt="">


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Name </label>
                                    <input type="text" value="{{ old('name_en') }}" class="form-control " name="name_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('name_en')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Email </label>
                                    <input type="email" value="{{ old('email') }}" class="form-control " name="email"
                                        id="exampleInputEmail1">

                                </div>
                                @error('email')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror



                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">age </label>
                                    <input type="text" value="{{ old('age') }}" class="form-control " name="age"
                                        id="exampleInputEmail1">

                                </div>
                                @error('age')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror



                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Country </label>

                                    <select name="country_id"  id="country-dropdown" class="form-control">
                                        <option value="">-- Select Country --</option>
                                        @foreach ($countries as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('country_id')
                                <span class="text-denger">{{ $message }}</span>
                            @enderror

                                <div class="form-group mb-3">
                                    <select name="state_id" id="state-dropdown" class="form-control">


                                    </select>
                                </div>
                                @error('state_id')
                                <span class="text-denger">{{ $message }}</span>
                            @enderror
                                <div class="form-group">
                                    <select name="city_id" id="city-dropdown" class="form-control">
                                    </select>
                                </div>

                                @error('city_id')
                                <span class="text-denger">{{ $message }}</span>
                            @enderror




                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">National ID</label>
                                    <input type="text" value="{{ old('national_id') }}" class="form-control" name="national_id"
                                        id="exampleInputEmail1">

                                </div>
                                @error('national_id')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="text" value="{{ old('phone') }}" class="form-control" name="phone"
                                        id="exampleInputEmail1">

                                </div>
                                @error('phone')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror






                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Specialties </label>
                                    <select name="specialty_id"  id="specialty-dropdown" class="form-control">

                                        <option value="">-- Select Specialties --</option>
                                        @foreach ($specialties as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('specialty_id')
                                <span class="text-denger">{{ $message }}</span>
                            @enderror
                                <div class="form-group mb-3">
                                    <select name="subspecialty_id" id="subspecialty-dropdown" class="form-control">
                                    </select>
                                </div>
                                @error('subspecialty_id')
                                <span class="text-denger">{{ $message }}</span>
                            @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <input type="text" value="{{ old('description_en') }}" class="form-control" name="description_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('description_en')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror








                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input name="image" onchange="showPreview(event)"   class="form-control" id="image" placeholder="image" type="file">
                                </div>
                                @error('image')
                                <span class="text-denger" >{{ $message }}</span>
                                @enderror
                                <script>
                                    function showPreview(event)
                                    {
                                        if(event.target.files.length > 0)
                                        {
                                            let src = URL.createObjectURL(event.target.files[0]);
                                            let prv = document.getElementById('img-prv');
                                            prv.src = src;
                                        }
                                    }
                                </script>
                                @endif



                                @if(App::getLocale()=='ar')
                                <img  id="img-prv" width="250px" height="250px" src="" alt="">


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">الاسم</label>
                                    <input type="text" value="{{ old('name_ar') }}" class="form-control " name="name_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('name_ar')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">الايميل </label>
                                    <input type="email" value="{{ old('email') }}" class="form-control " name="email"
                                        id="exampleInputEmail1">

                                </div>
                                @error('email')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror



                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">العمر </label>
                                    <input type="text" value="{{ old('age') }}" class="form-control " name="age"
                                        id="exampleInputEmail1">

                                </div>
                                @error('age')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror



                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">البلد </label>

                                    <select name="countrie_id"  id="country-dropdown" class="form-control">
                                        <option value="">-- Select Country --</option>
                                        @foreach ($countries as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <select name="state_id" id="state-dropdown" class="form-control">


                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="citie_id" id="city-dropdown" class="form-control">
                                    </select>
                                </div>



                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">رقم البطاقه</label>
                                    <input type="text" value="{{ old('national_id') }}" class="form-control" name="national_id"
                                        id="exampleInputEmail1">

                                </div>
                                @error('national_id')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">تليفون</label>
                                    <input type="text" value="{{ old('phone') }}" class="form-control" name="phone"
                                        id="exampleInputEmail1">

                                </div>
                                @error('phone')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror






                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">التخصص </label>
                                    <select name="specialtie_id"  id="specialty-dropdown" class="form-control">

                                        <option value="">-- Select Specialties --</option>
                                        @foreach ($specialties as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <select name="subspecialtie_id" id="subspecialty-dropdown" class="form-control">
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">الوصف</label>
                                    <input type="text" value="{{ old('description_ar') }}" class="form-control" name="description_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('description_ar')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror








                                <div class="form-group">
                                    <label for="image">الصوره</label>
                                    <input name="image" onchange="showPreview(event)"   class="form-control" id="image" placeholder="image" type="file">
                                </div>
                                @error('image')
                                <span class="text-denger" >{{ $message }}</span>
                                @enderror
                                <script>
                                    function showPreview(event)
                                    {
                                        if(event.target.files.length > 0)
                                        {
                                            let src = URL.createObjectURL(event.target.files[0]);
                                            let prv = document.getElementById('img-prv');
                                            prv.src = src;
                                        }
                                    }
                                </script>
                                @endif




                                @if(App::getLocale()=='fr')
                                <img  id="img-prv" width="250px" height="250px" src="" alt="">


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Name </label>
                                    <input type="text" value="{{ old('name_fr') }}" class="form-control " name="name_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('name_fr')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Email </label>
                                    <input type="email" value="{{ old('email') }}" class="form-control " name="email"
                                        id="exampleInputEmail1">

                                </div>
                                @error('email')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror



                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">age </label>
                                    <input type="text" value="{{ old('age') }}" class="form-control " name="age"
                                        id="exampleInputEmail1">

                                </div>
                                @error('age')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror



                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Country </label>

                                    <select name="countrie_id"  id="country-dropdown" class="form-control">
                                        <option value="">-- Select Country --</option>
                                        @foreach ($countries as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <select name="state_id" id="state-dropdown" class="form-control">


                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="citie_id" id="city-dropdown" class="form-control">
                                    </select>
                                </div>



                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">National ID</label>
                                    <input type="text" value="{{ old('national_id') }}" class="form-control" name="national_id"
                                        id="exampleInputEmail1">

                                </div>
                                @error('national_id')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="text" value="{{ old('phone') }}" class="form-control" name="phone"
                                        id="exampleInputEmail1">

                                </div>
                                @error('phone')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror






                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Specialties </label>
                                    <select name="specialtie_id"  id="specialty-dropdown" class="form-control">

                                        <option value="">-- Select Specialties --</option>
                                        @foreach ($specialties as $data)
                                        <option value="{{$data->id}}">
                                            {{$data->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <select name="subspecialtie_id" id="subspecialty-dropdown" class="form-control">
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <input type="text" value="{{ old('description_fr') }}" class="form-control" name="description_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('description_fr')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror








                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input name="image" onchange="showPreview(event)"   class="form-control" id="image" placeholder="image" type="file">
                                </div>
                                @error('image')
                                <span class="text-denger" >{{ $message }}</span>
                                @enderror
                                <script>
                                    function showPreview(event)
                                    {
                                        if(event.target.files.length > 0)
                                        {
                                            let src = URL.createObjectURL(event.target.files[0]);
                                            let prv = document.getElementById('img-prv');
                                            prv.src = src;
                                        }
                                    }
                                </script>
                                 @endif








                                <button type="submit" class="btn btn-primary">Add</button>
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
            $('#country-dropdown').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown").html('');
                $.ajax({
                    url: "{{url('dashboard/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state-dropdown').html('<option value="">-- Select State --</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                    }
                });
            });

            /*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#state-dropdown').on('change', function () {
                var idState = this.value;
                $("#city-dropdown").html('');
                $.ajax({
                    url: "{{url('dashboard/fetch-cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

        });
    </script>
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
