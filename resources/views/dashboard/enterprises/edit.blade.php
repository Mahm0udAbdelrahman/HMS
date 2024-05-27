@extends('dashboard.layout.app')
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                edit enterprise
                            </div>

                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.enterprises.update', $enterprise->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')


                                @if (App::getLocale() == 'en')
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" value="{{ $enterprise->name_en }}" class="form-control"
                                            name="name_en" id="exampleInputEmail1">

                                    </div>
                                    @error('name_en')
                                        <span class="text-denger">{{ $message }}</span>
                                    @enderror
                                @endif


                                @if (App::getLocale() == 'ar')
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" value="{{ $enterprise->name_ar }}" class="form-control"
                                            name="name_ar" id="exampleInputEmail1">

                                    </div>
                                    @error('name_ar')
                                        <span class="text-denger">{{ $message }}</span>
                                    @enderror
                                @endif


                                @if (App::getLocale() == 'fr')
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" value="{{ $enterprise->name_fr }}" class="form-control"
                                            name="name_fr" id="exampleInputEmail1">

                                    </div>
                                    @error('name_fr')
                                        <span class="text-denger">{{ $message }}</span>
                                    @enderror
                                @endif


                                <button type="submit" class="btn btn-primary">edit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
