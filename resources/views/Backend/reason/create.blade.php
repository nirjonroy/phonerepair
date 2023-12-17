@extends('Backend.layouts')
@section('title', 'Nirjon Phone Repir Reason Create')
@push('css')

@endpush
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
                <div class="card-header">
                    {{-- <h5> Add User</h5> --}}
                </div>
                <div class="card-body">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                            <form action="{{route('reason.store')}}" class="needs-validation user-add" method="post" enctype="multipart/form-data">
                                @csrf
                                <h4>Add Why Choose Us</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Choose Us Image</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="file" name="logo" >
                                </div>

                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Title</label>
                                <div class="description-sm">
                                   <input type="text" name="title" id="" class="form-control">
                                </div>
                                </div>


                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Short Description </label>
                                <div class="description-sm">
                                   <textarea id="" name="text" cols="100" rows="4"></textarea>
                                </div>
                                </div>


                                <div class="pull-right">

                                    <input type="submit" value="submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

</div>


<script src="{{asset('backend/assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('backend/assets/js/editor/ckeditor/styles.js')}}"></script>
<script src="{{asset('backend/assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('backend/assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>
@endsection
