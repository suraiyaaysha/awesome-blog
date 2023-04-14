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
                        <h4 class="card-title">Contact Page Settings</h4>
                        <form class="forms-sample" method="POST" action="{{ '/admin/contact/' }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" name="contact_heading" value="{{ old('contact_heading', $cms->contact_heading) }}">

                                @if ($errors->has('contact_heading'))
                                    <span class="text-danger">{{ $errors->first('contact_heading') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" name="contact_sub_heading" value="{{ old('contact_sub_heading', $cms->contact_sub_heading) }}">

                                @if ($errors->has('contact_sub_heading'))
                                    <span class="text-danger">{{ $errors->first('contact_sub_heading') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Banner Image upload</label>
                                <input type="file" class="form-control" name="contact_banner_img">

                                @if ($errors->has('contact_banner_img'))
                                    <span class="text-danger">{{ $errors->first('contact_banner_img') }}</span>
                                @endif

                                {{-- @php
                                    dd($cms->about_banner_img)
                                @endphp --}}

                                <div class="badge-outline-success mt-3">
                                     <img src="{{ asset($cms->contact_banner_img) }}" alt="Here is Banner Image">
                                </div>
                            </div>

                            <h4 class="card-title mt-5">Create Page content</h4>
                            <div class="form-group">
                                <label>Page content</label>
                                <textarea class="ckeditor form-control" name="contact_content">{{ old('contact_content', $cms->contact_content) }}</textarea>

                                @if ($errors->has('contact_content'))
                                    <span class="text-danger">{{ $errors->first('contact_content') }}</span>
                                @endif

                            </div>

                            <button type="submit" class="btn btn-primary me-2">Update</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>

        {{-- <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Page Banner</h4>
                        <form class="forms-sample" method="POST" action="{{ '/admin/contact/store' }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" name="heading" value="{{ old('heading') }}">

                                @if ($errors->has('heading'))
                                    <span class="text-danger">{{ $errors->first('heading') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" name="sub_heading" value="{{ old('sub_heading') }}">

                                @if ($errors->has('sub_heading'))
                                    <span class="text-danger">{{ $errors->first('sub_heading') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Banner Image upload</label>
                                <input type="file" class="form-control" name="banner_img">

                                @if ($errors->has('banner_img'))
                                    <span class="text-danger">{{ $errors->first('banner_img') }}</span>
                                @endif
                            </div>

                            <h4 class="card-title mt-5">Create Page content</h4>
                            <div class="form-group">
                                <label>Page content</label>
                                <textarea class="ckeditor form-control" name="page_content">{{ old('page_content') }}</textarea>

                                @if ($errors->has('page_content'))
                                    <span class="text-danger">{{ $errors->first('page_content') }}</span>
                                @endif

                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>

                        </form>
                    </div>
                </div>

            </div>
        </div> --}}

        {{-- @foreach ($data as $item)
            <p>{{ $item->user_name }}</p>
        @endforeach --}}

    </div>
@endsection
