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

                        @if ($message = Session::get('success'))

                            <div class="grid-margin">
                                <div class="alert alert-success badge-outline-success">
                                    {{  $message  }}
                                </div>
                            </div>
                        @endif

                        <form method="POST" action="{{ '/contact' }}">
                            @csrf
                            <div class="form-floating">
                                <input class="form-control" type="text" name="user_name" value="{{ old('user_name') }}" placeholder="Enter your name..." />
                                <label for="name">Name</label>

                                @if ($errors->has('user_name'))
                                    <span class="text-danger">{{ $errors->first('user_name') }}</span>
                                @endif

                            </div>
                            <div class="form-floating">
                                <input class="form-control" type="email" name="user_email" value="{{ old('user_email') }}" placeholder="Enter your email..." />
                                <label for="email">Email address</label>

                                @if ($errors->has('user_email'))
                                    <span class="text-danger">{{ $errors->first('user_email') }}</span>
                                @endif

                            </div>
                            <div class="form-floating">
                                <input class="form-control" type="text" name="user_phone" value="{{ old('user_phone') }}" placeholder="Enter your phone number..." />
                                <label for="phone">Phone Number</label>

                                @if ($errors->has('user_phone'))
                                    <span class="text-danger">{{ $errors->first('user_phone') }}</span>
                                @endif

                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" name="user_message" placeholder="Enter your message here..." style="height: 12rem">{{ old('user_message') }}</textarea>
                                <label for="message">Message</label>

                                @if ($errors->has('user_message'))
                                    <span class="text-danger">{{ $errors->first('user_message') }}</span>
                                @endif

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
