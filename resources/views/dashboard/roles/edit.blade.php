@extends('dashboard.layout.app')
@section('content')

<div class="main-content app-content">
    <div class="container-fluid">
<div class="row ">
<div class="col">
    <div class="card custom-card">
        <div class="card-header justify-content-between">
            <div class="card-title">
               edit role
            </div>

        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.roles.update' ,$role->id ) }}" enctype="multipart/form-data" >
                @csrf
                @method('PUT')



                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name Country</label>
                    <input type="text" value="{{ $role->name }}" class="form-control" name="name" id="exampleInputEmail1" >

                </div>
                @error('name')
                <span class="text-denger" >{{ $message }}</span>
                @enderror



                <button type="submit" class="btn btn-primary">edit</button>
            </form>
        </div>

    </div>
</div>
</div>
</div>
</div>


















@endsection
