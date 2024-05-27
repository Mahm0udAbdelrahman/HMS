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
                <a class="btn btn-primary" href="{{ route('admin.setting.create') }}"> Add Setting </a>
                <table id="myTable">
                    <thead>


                        <tr>
                            <th>#</th>
                            <th>address</th>
                            <th>description</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>facebook</th>
                            <th>instagram</th>
                            <th>twitter</th>
                            <th>logo</th>

                            <th>Option</th>

                        </tr>





                    </thead>
                    <tbody>
                        @foreach ($data as $setting)
                             <tr>

                                <td>{{ $loop->index + 1 }}</td>

                                <td> {{ $setting->address_en }} </td>

                                <td> {{ $setting->{'description_' .LaravelLocalization::getCurrentLocale()} }} </td>
                                <td> {{  $setting->{'address_' .LaravelLocalization::getCurrentLocale()} }} </td>

                                <td> {{ $setting->email }} </td>
                                <td> {{ $setting->phone }} </td>
                                <td> {{ $setting->facebook }} </td>
                                <td> {{ $setting->instagram }} </td>
                                <td> {{ $setting->twitter }} </td>

                                <td>  {{ $setting->{'logo_' .LaravelLocalization::getCurrentLocale()} }} </td>




                                <td>
                                    <a href="{{ route('admin.setting.edit', $setting->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('admin.setting.destroy', $setting->id) }}" method="POST" class="d-inline">
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
