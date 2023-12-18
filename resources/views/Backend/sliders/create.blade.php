@extends('Backend.layouts')
@section('title', 'Nirjon Phone Repir Slider Create')
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
                            <form action="{{route('sliders.store')}}" class="needs-validation user-add" method="post" enctype="multipart/form-data">
                                @csrf
                                <h4>Add Slider</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Slider Image</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="file" name="image" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom1" class="col-xl-3 col-md-4"><span></span> Title</label>

                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" required="" name="title">
                                </div>
                                <div class="form-group row">
                                        <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Paragraph</label>
                                        <textarea class="form-control col-xl-8 col-md-7" name="paragraph"></textarea>

                                    </div>
                                    <div class="pull-right">
                                        {{-- <button type="button" class="btn btn-primary">Save</button> --}}
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
@endsection
