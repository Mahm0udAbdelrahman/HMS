@extends('dashboard.layout.app')
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Add role
                            </div>

                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.roles.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name </label>
                                    <input type="text" value="{{ old('name') }}" class="form-control" name="name"
                                        id="exampleInputEmail1">

                                </div>
                                @error('name')
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
