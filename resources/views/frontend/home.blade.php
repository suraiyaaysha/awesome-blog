@extends('frontend.layouts.app')
@section('content')
    <!-- Page Header-->
    {{-- <header class="masthead" style="background-image: url('{{ asset('/frontend/assets/img/home-bg.jpg') }}')"> --}}
    <header class="masthead" style="background-image: url('{{ $cms->home_banner_img }}');">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>{{ $cms->home_heading }}</h1>
                        <span class="subheading">{{ $cms->home_sub_heading }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">

                <div id="posts-container">

                    @foreach ($posts as $post)
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/frontend/blog/{{ $post->id }}/blog-details">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{{ $post->short_details }}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{ $post->author }}</a>
                            on {{ $post->updated_at->format('F j, Y') }}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    @endforeach

                </div>

                <!-- Pager-->
                {{ $posts->links() }}
                {{-- <div id="load-more-posts" class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div> --}}
            </div>
        </div>
    </div>

@endsection
