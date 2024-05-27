@extends('dashboard.layout.app')
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Add enterprises
                            </div>

                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.enterprises.store') }}" enctype="multipart/form-data">
                                @csrf
                                @if(App::getLocale()=='en')

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name </label>
                                    <input type="text" value="{{ old('name_en') }}" class="form-control" name="name_en"
                                        id="exampleInputEmail1">

                                </div>
                                @error('name')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                @endif

                                @if(App::getLocale()=='ar')

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">الاسم </label>
                                    <input type="text" value="{{ old('name_ar') }}" class="form-control" name="name_ar"
                                        id="exampleInputEmail1">

                                </div>
                                @error('name')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                @endif


                                @if(App::getLocale()=='fr')

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" value="{{ old('name_fr') }}" class="form-control" name="name_fr"
                                        id="exampleInputEmail1">

                                </div>
                                @error('name')
                                    <span class="text-denger">{{ $message }}</span>
                                @enderror

                                @endif




                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
