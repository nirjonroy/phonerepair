@extends('Backend.layouts')
@section('title', 'Nirjon Phone Repir Slider')
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
                        <h3>About page
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
                        <h5>Manage about page</h5>
                        {{-- <a href="{{route('about.create')}}" class="btn btn-success float-right">Create</a> --}}
                    </div>
                    <div class="card-body order-datatable">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Paragraph</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($abouts as $key=>$about)
                            <tr>
                                <td> {{$key + 1}} </td>
                                <td>
                                    <div class="d-flex">
                                        <img src="{{ asset('storage/' . $about->image) }}" alt="sdfa" class="img-fluid " width="50px" height="50px">

                                    </div>
                                </td>

                                <td>
                                    {!!$about->description!!}
                                </td>
                                <td>
                                    <a href="{{ route('about.edit', $about->id) }}" class="btn btn-warning">Edit</a>
                                    {{-- <a href="{{ route('about.destroy', $about->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{$key}}').submit();">Delete</a>

                                    <!-- Add a form for the delete action -->
                                    <form id="delete-form-{{$key}}" action="{{ route('sliders.destroy', $about->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form> --}}

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
