@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">

        <div class="row justify-content-center">

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Details of {{ $post->title }}</h4>
                        <p>{{ $post->short_details }}</p>
                        <div>{!! $post->details !!}</div>
                        <p>By: {{ $post->author }}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
