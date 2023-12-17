@extends('Backend.layouts')
@section('title', 'Nirjon Phone Repir Testiminal')
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
                        <h3>Testimonial page
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
                        <h5>Manage Testimonial page</h5>
                        <a href="{{route('testimonial.create')}}" class="btn btn-success float-right">Create</a>
                    </div>
                    <div class="card-body order-datatable">
                        <table class="display table table-bordered" id="basic-1">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>text</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testimonials as $key=>$testimonial)
                            <tr>
                                <td> {{$key + 1}} </td>
                                <td>
                                    <div class="d-flex">
                                        <img src="{{ asset('storage/' . $testimonial->image) }}" alt="sdfa" class="img-fluid " width="50px" height="50px">

                                    </div>
                                </td>

                                <td>
                                    {{$testimonial->name}}
                                </td>
                                <td>
                                    {{$testimonial->designation}}
                                </td>

                                <td>
                                    <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                                    {{-- <a href="{{ route('testimonial.edit', $testimonial->id) }}" class="btn btn-success">Show</a> --}}
                                    <a href="{{ route('testimonial.destroy', $testimonial->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{$key}}').submit();">Delete</a>

                                    <!-- Add a form for the delete action -->
                                    <form id="delete-form-{{$key}}" action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST" style="display: none;">
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
