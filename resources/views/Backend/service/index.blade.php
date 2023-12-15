@extends('Backend.layouts')
@section('title', 'Service  Controller')
@push('css')

@endpush
@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Service
                            <small></small>
                        </h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Service</h5>
                        <a href="{{route('service.create')}}" class="btn btn-success float-right">Create</a>
                    </div>
                    <div class="card-body order-datatable">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Service  Name</th>
                                <th>Image</th>
                                <th>Phone</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $key=>$service)
                            <tr>
                                <td> {{$key + 1}} </td>
                                <td>
                                    <div class="d-flex">
                                        {{$service->serviceName}}

                                    </div>
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="sdfa" class="img-fluid " width="50px" height="50px">
                                </td>

                                <td>
                                    {{$service->serviceNumber}}
                                </td>

                                <td>
                                    <a href="{{ route('service.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('service.destroy', $service->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{$key}}').submit();">Delete</a>

                                    <!-- Add a form for the delete action -->
                                    <form id="delete-form-{{$key}}" action="{{ route('service.destroy', $service->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
@endsection
