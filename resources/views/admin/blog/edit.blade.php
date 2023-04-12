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

        <div class="row justify-content-center">

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Post form</h4>

                        <form class="forms-sample" action="/admin/blog/{{ $post->id }}/update" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label for="exampleInputUsername1">Title</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="title" name="title" value="{{ old('title', $post->title) }}">

                                @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Short Details</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Short Details" name="short_details" value="{{ old('short_details', $post->short_details) }}">

                                @if ($errors->has('short_details'))
                                    <span class="text-danger">{{ $errors->first('short_details', $post->short_details) }}</span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Details</label>
                                {{-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Details" name="details" value="{{ old('details') }}"> --}}
                                <textarea class="ckeditor form-control" name="details">{{ old('details', $post->details) }}</textarea>

                                @if ($errors->has('details'))
                                    <span class="text-danger">{{ $errors->first('details') }}</span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Author</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                    placeholder="Author" name="author" value="{{ old('author', $post->author) }}">

                                @if ($errors->has('author'))
                                    <span class="text-danger">{{ $errors->first('author') }}</span>
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
