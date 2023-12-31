@extends('Backend.layouts')
@section('title', 'Nirjon Phone Repir Reason')
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
                        <h3>All Messages
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
                        <h5>Manage Message</h5>

                    </div>
                    <div class="card-body order-datatable">
                        <table class="table table-border display" id="basic-1">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                {{-- <th>Action</th> --}}

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $key=>$message)
                            <tr>
                                <td> {{$key + 1}} </td>
                                <td>
                                    {{$message->name}}
                                </td>

                                <td>
                                    {{$message->email}}
                                </td>
                                <td>
                                    {{$message->phone}}
                                </td>
                                <td>
                                   

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
