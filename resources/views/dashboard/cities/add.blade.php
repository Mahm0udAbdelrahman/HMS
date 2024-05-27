@extends('dashboard.layout.app')
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Add City
                            </div>

                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.cities.store') }}" enctype="multipart/form-data">
                                @csrf

                                <select name="country_id" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                    <option value="" @selected(old('country_id')==null )>Select Parent </option>
                                    @foreach($countries as $country)
                                    <option  @selected(old('country_id')==$country->id )
                                        value="{{$country->id}}">{{ $country->country }}</option>
                                    @endforeach
                                </select>
                                @error('country_id')
                                        <span class="text-danger">{{ $message }}</span>
                                @enderror



                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name city</label>
                                    <input type="text" value="{{ old('city') }}" class="form-control" name="city"
                                        id="exampleInputEmail1">

                                </div>
                                @error('city')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror




                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
