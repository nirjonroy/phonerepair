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
                            <form action="{{route('service-categories.store')}}" class="needs-validation user-add" method="post" enctype="multipart/form-data">
                                @csrf
                                <h4>Service Category </h4>
                                <div class="form-group row">
                                    <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> Name </label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" required="" name="name">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Slug</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom2" type="text" required="" name="slug">
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        // Function to generate a slug from the provided string
        function generateSlug(str) {
            return str
                .toLowerCase()
                .replace(/ /g, '-')    // Replace spaces with dashes
                .replace(/[^\w-]+/g, ''); // Remove non-word characters
        }

        // Event handler for the name input
        $('#validationCustom1').on('input', function () {
            // Get the value from the name input
            var nameValue = $(this).val();

            // Generate the slug and update the slug input
            $('#validationCustom2').val(generateSlug(nameValue));
        });
    });
</script>




@endsection
