@extends('dashboard.layout.app')
@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <div class="card custom-card">

                <div class="card-header">
                    <div class="card-title">
                        Responsive Datatable
                    </div>
                </div>
                <a class="btn btn-primary" href="{{ route('admin.roles.create') }}"> Add Role </a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                @endif

                <table id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>Option</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $roles)
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
                            <td> {{ $roles->name }} </td>
                            <td>
                                <a href="{{ route('admin.roles.edit', $roles->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.roles.destroy', $roles->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="if(!confirm('Are you sure?')){return false}" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>







            </div>
        </div>
    </div>
@endsection
