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
                        <form class="forms-sample" method="POST" action="{{ '/admin/home/' }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" name="home_heading" value="{{ old('home_heading', $cms->home_heading) }}">

                                @if ($errors->has('home_heading'))
                                    <span class="text-danger">{{ $errors->first('home_heading') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading" name="home_sub_heading" value="{{ old('home_sub_heading', $cms->home_sub_heading) }}">

                                @if ($errors->has('home_sub_heading'))
                                    <span class="text-danger">{{ $errors->first('home_sub_heading') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Banner Image upload</label>
                                <input type="file" class="form-control" name="home_banner_img">

                                @if ($errors->has('home_banner_img'))
                                    <span class="text-danger">{{ $errors->first('home_banner_img') }}</span>
                                @endif

                                {{-- @php
                                    dd($cms->about_banner_img)
                                @endphp --}}

                                <div class="badge-outline-success mt-3">
                                    {{-- <img src="/frontend/assets/img/{{ $cms->about_banner_img }}" alt="Here is Banner Image"> --}}
                                    {{-- <img src="{{ asset($cms->about_banner_img) }}" alt=""> --}}
                                    <img src="{{ asset($cms->home_banner_img) }}" alt="Here is Banner Image">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Update</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
