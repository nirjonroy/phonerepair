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
                            <form action="{{route('service.store')}}" class="needs-validation user-add" method="post" enctype="multipart/form-data">
                                @csrf
                                <h4>Service</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Service Imame</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="file" name="serviceImage" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom1" class="col-xl-3 col-md-4"><span></span> Service Name</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" required="" name="serviceName">
                                </div>

                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Service Phone</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" required="" name="serviceNumber">
                                </div>

                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Service Slug</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom2" type="text" required="" name="serviceSlug">
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
<!-- Add this script at the end of your Blade file, after including jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        function generateSlug(str) {
            return str
                .toLowerCase()
                .replace(/ /g, '-')    // Replace spaces with dashes
                .replace(/[^\w-]+/g, ''); // Remove non-word characters
        }

        $('#validationCustom1').on('input', function () {
            var nameValue = $(this).val();
            $('#validationCustom2').val(generateSlug(nameValue));
        });
    });
</script>

@endsection
