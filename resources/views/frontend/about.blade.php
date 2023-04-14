@extends('frontend.layouts.app')
@section('content')
    <!-- Page Header-->
    {{-- <header class="masthead" style="background-image: url('{{ asset('/frontend/assets/img/about-bg.jpg') }}')"> --}}

    {{-- <header class="masthead" style="background-image: url({{URL('/')}}/frontend/assets/img/{{ $cms->about_banner_img }});"> --}}
    <header class="masthead" style="background-image: url('{{ $cms->about_banner_img }}');">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>{{ $cms->about_heading }}</h1>
                        <span class="subheading">{{ $cms->about_sub_heading }}</span>
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
                    {!! $cms->about_content !!}
                </div>
            </div>
        </div>
    </main>
@endsection
