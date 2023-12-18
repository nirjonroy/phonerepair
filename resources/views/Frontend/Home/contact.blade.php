@extends('frontend.app')
@section('title', 'Contct Us Page')
@push('css')
@endpush
@section('content')
<section class="pricing-sec">
    <div class="container">
        <div class="sec-title mb-0">
            <h2>Get <span>in Touch</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Single Pricing Table Sec -->
                <div class="single-ticket">
                    <div class="inner-box">
                        <form action="{{route('submit.contact')}}" method="post">
                            @csrf
                            <div class="container">
                             <div class="row">

                                <div class="col-md-6">
                                <label for="name"><b>Name</b></label>
                                <input type="text" placeholder="Enter name" name="name" id="" required class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="name"><b>E-mail</b></label>
                                    <input type="email" placeholder="Enter Email" name="email" id="" required class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="name"><b>Phone</b></label>
                                    <input type="number" placeholder="Enter Phone" name="phone" id="" required class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="name"><b>Address</b></label>
                                    <input type="text" placeholder="Enter Address" name="address" id="" required class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="name"><b>Subject</b></label>
                                    <input type="text" placeholder="Enter Subject" name="subject" id="" required class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <label for="name"><b>Message</b></label>
                                    <textarea name="message" id="" cols="100" rows="10"></textarea>
                                </div>
                                <div class="col-md-12"></div>




                                <div class="float-right">
                                    <input type="submit" value="submit" class="btn btn-success">

                                </div>

                              </div>
                             </div>

                          </form>

                    </div>
                </div>
            </div>


        </div>
    </div>


</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1431292557613!2d90.37125807410007!3d23.74227488909061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4b210c4acf%3A0x2bb8364cdfa2103a!2sDhanmondi%206A!5e0!3m2!1sen!2sbd!4v1702905406406!5m2!1sen!2sbd" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@endsection
