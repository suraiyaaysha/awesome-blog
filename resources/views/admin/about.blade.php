@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">

        <div class="row justify-content-center">
            @if ($message = Session::get('success'))

                <div class="col-md-6 grid-margin">
                    <div class="alert alert-success badge-outline-success">
                        {{  $message  }}
                    </div>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Page Banner</h4>
                        <form class="forms-sample" method="POST" action="{{ '/admin/about/' }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" name="about_heading" value="{{ old('about_heading', $cms->about_heading) }}">

                                @if ($errors->has('about_heading'))
                                    <span class="text-danger">{{ $errors->first('about_heading') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" name="about_sub_heading" value="{{ old('about_sub_heading', $cms->about_sub_heading) }}">

                                @if ($errors->has('about_sub_heading'))
                                    <span class="text-danger">{{ $errors->first('about_sub_heading') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Banner Image upload</label>
                                <input type="file" class="form-control" name="about_banner_img">

                                @if ($errors->has('about_banner_img'))
                                    <span class="text-danger">{{ $errors->first('about_banner_img') }}</span>
                                @endif

                                {{-- @php
                                    dd($cms->about_banner_img)
                                @endphp --}}

                                <div class="badge-outline-success mt-3">
                                    {{-- <img src="/frontend/assets/img/{{ $cms->about_banner_img }}" alt="Here is Banner Image"> --}}
                                    {{-- <img src="{{ asset($cms->about_banner_img) }}" alt=""> --}}

                                   <img src="{{ asset($cms->about_banner_img) }}" alt="Here is Banner Image">

                                </div>
                            </div>

                            <h4 class="card-title mt-5">Create Page content</h4>
                            <div class="form-group">
                                <label>Page content</label>
                                <textarea class="ckeditor form-control" name="about_content">{{ old('about_content', $cms->about_content) }}</textarea>

                                @if ($errors->has('about_content'))
                                    <span class="text-danger">{{ $errors->first('about_content') }}</span>
                                @endif

                            </div>

                            <button type="submit" class="btn btn-primary me-2">Update</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
