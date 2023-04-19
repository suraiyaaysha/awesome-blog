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
                        <h4 class="card-title">Profile Settings</h4>

                        {{-- <form id="formAccountSettings" method="POST" action="{{ route('profile.update',auth()->id()) }}" enctype="multipart/form-data" class="needs-validation" role="form" novalidate>
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">{{ trans('sentence.name')}}</label>
                                        <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" required>
                                        <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">{{ trans('sentence.email')}}</label>
                                        <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="john.doe@example.com">
                                        <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="button-create me-2">{{ trans('sentence.save_changes')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form> --}}

                        <form class="forms-sample" method="POST" action="{{ route('profile.update',auth()->id()) }}" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('PUT') --}}
                            <div class="form-group">
                                <label>Name</label>
                                {{-- <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('about_heading', $cms->about_heading) }}"> --}}
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{ auth()->user()->name }}">

                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ auth()->user()->email }}">

                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group profile-img-box">
                                <label>Profile Photo upload</label>
                                <input type="file" class="form-control" name="photo">

                                @if ($errors->has('photo'))
                                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                                @endif

                                <div class="mt-3">

                                   <img src="{{ asset(auth()->user()->photo) }}" alt="Profile photo" class="badge-outline-success">

                                </div>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="15" name="address">{{ auth()->user()->address }}</textarea>

                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
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
