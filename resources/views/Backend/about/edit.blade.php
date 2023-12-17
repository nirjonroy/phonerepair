@extends('Backend.layouts')
@section('title', 'Nirjon Phone Repir About Create')
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
                            <form action="{{ route('about.update', $about->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') 

                                <h4>Add About</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> About Image</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="file" name="image" required="">
                                </div>

                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Paragraph</label>

                                    <div class="description-sm">
                                        <textarea id="editor1" name="description" cols="10" rows="4">{{ $about->description }}</textarea>
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
