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
                <a class="btn btn-primary" href="{{ route('admin.cities.create') }}"> Add city </a>
                <table id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Country</th>
                            <th>name</th>
                            <th>Option</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $city)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $loop->country->country }}</td>
                                <td> {{ $city->city }} </td>
                                <td>
                                    <a href="{{ route('admin.cities.edit', $city->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.cities.destroy', $city->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="if(!confirm('Are you sure?')){return false}"
                                            class="btn btn-sm btn-danger">Delete</button>
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
