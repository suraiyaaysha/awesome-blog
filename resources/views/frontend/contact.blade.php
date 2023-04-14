@extends('frontend.layouts.app')
@section('content')
    <!-- Page Header-->
    {{-- <header class="masthead" style="background-image: url('{{ asset('/frontend/assets/img/contact-bg.jpg') }}')"> --}}
    {{-- <header class="masthead" style="background-image: url('/frontend/assets/img/{{ $cms->contact_banner_img }}');"> --}}
    <header class="masthead" style="background-image: url('{{ $cms->contact_banner_img }}');">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>{{ $cms->contact_heading }}</h1>
                        <span class="subheading">{{ $cms->contact_sub_heading }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {!! $cms->contact_content !!}

                    <div class="my-5">

                        <form id="contactForm" method="POST" action="{{ '/admin/contact/list' }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating">
                                <input class="form-control" type="text" name="user_name" placeholder="Enter your name..." />
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" type="email" name="user_email" placeholder="Enter your email..." />
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" type="text" name="user_phone" placeholder="Enter your phone number..." />
                                <label for="phone">Phone Number</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" name="user_message" placeholder="Enter your message here..." style="height: 12rem"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <br />
                            <!-- Submit success message-->
                            <!---->

                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
