@extends('Backend.layouts')
@section('title', 'Nirjon Phone Repair Slider Edit')
@push('css')

@endpush
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
                <div class="card-header">
                    {{-- <h5> Edit Service Category</h5> --}}
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                            <form action="{{ route('sliders.update', $slider->id) }}" class="needs-validation user-add" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- Use the PUT method for updating -->

                                <h4>Add Slider</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Slider Image</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="file" name="image" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom1" class="col-xl-3 col-md-4"><span></span> Title</label>

                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" required="" value="{{$slider->title}}" name="title">
                                </div>
                                <div class="form-group row">
                                        <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Paragraph</label>
                                        <textarea class="form-control col-xl-8 col-md-7" name="paragraph" >{{$slider->paragraph}}</textarea>

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

@push('js')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

        // Optional: You can use SweetAlert for error messages if you handle form submission using AJAX
        $('.user-add').submit(function (event) {
            event.preventDefault(); // Prevent the default form submission

            // AJAX request or form submission logic here...

            // Show SweetAlert on success
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Service category updated successfully!',
            });
        });
    });
</script>
@endpush
@endsection
