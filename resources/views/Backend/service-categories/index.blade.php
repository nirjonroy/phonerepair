@extends('Backend.layouts')
@section('title', 'Service Category Controller')
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
                        <h3>Service Category
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
                        <h5>Manage Service Category</h5>
                        <a href="{{route('service-categories.create')}}" class="btn btn-success float-right">Create</a>
                    </div>
                    <div class="card-body order-datatable">
                        <table class="display table table-borderd" id="basic-1">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Service Category Name</th>
                                <th>Slug</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($serviceCategories as $key=>$servCat)
                            <tr>
                                <td> {{$key + 1}} </td>
                                <td>
                                    <div class="d-flex">
                                        {{$servCat->name}}

                                    </div>
                                </td>
                                <td>
                                    {{$servCat->slug}}
                                </td>

                                <td>
                                    <a href="{{ route('service-categories.edit', $servCat->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('service-categories.destroy', $servCat->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{$key}}').submit();">Delete</a>

                                    <!-- Add a form for the delete action -->
                                    <form id="delete-form-{{$key}}" action="{{ route('service-categories.destroy', $servCat->id) }}" method="POST" style="display: none;">
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
