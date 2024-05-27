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
                <a class="btn btn-primary" href="{{ route('admin.employees.create') }}"> Add employees </a>
                <table id="myTable">
                    <thead>


                        <tr>
                            <th>#</th>
                            <th>Name_{{LaravelLocalization::getCurrentLocale() }}</th>
                            <th>email</th>
                            <th>age</th>
                            <th>Name Country</th>
                            <th>Name state</th>
                            <th>Name city</th>
                            <th>national_id</th>
                            <th>phone</th>
                            <th>Name Specialty</th>
                            <th>Name Subspecialty</th>
                            <th>description_{{LaravelLocalization::getCurrentLocale() }}</th>
                            <th>image</th>

                            <th>Option</th>

                        </tr>





                    </thead>
                    <tbody>
                        @foreach ($data as $employee)
                             <tr>

                                <td>{{ $loop->index + 1 }}</td>


                                <td> {{ $employee->{'name_' .LaravelLocalization::getCurrentLocale()} }} </td>
                                <td> {{ $employee->email }} </td>
                                <td> {{ $employee->age }} </td>

                               <td> {{ $employee->country->name }} </td>
                                <td> {{ $employee->state->name }} </td>
                                <td> {{ $employee->city->name }} </td>
                                <td> {{ $employee->national_id }} </td>
                                <td> {{ $employee->phone }} </td>
                                 <td> {{ $employee->specialty->name }} </td>
                                <td> {{ $employee->subspecialty->name }} </td>

                                <td> {{  $employee->{'description_' .LaravelLocalization::getCurrentLocale()} }} </td>


                                <td> <img height="150" width="150"  src=" {{ asset('uploads/employee/'.$employee->image)  }}"> </td>




                                <td>
                                    <a href="{{ route('admin.employees.edit', $employee->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="POST" class="d-inline">
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
