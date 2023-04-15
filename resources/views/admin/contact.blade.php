@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">

        <div class="row justify-content-center">
            @if ($message = Session::get('success'))
                <div class="col-md-6 grid-margin">
                    <div class="alert alert-success badge-outline-success">
                        {{ $message }}
                    </div>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact Page Settings</h4>
                        <form class="forms-sample" method="POST" action="{{ '/admin/contact/' }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" placeholder="Heading" name="contact_heading"
                                    value="{{ old('contact_heading', $cms->contact_heading) }}">

                                @if ($errors->has('contact_heading'))
                                    <span class="text-danger">{{ $errors->first('contact_heading') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Sub Heading</label>
                                <input type="text" class="form-control" placeholder="Sub Heading"
                                    name="contact_sub_heading"
                                    value="{{ old('contact_sub_heading', $cms->contact_sub_heading) }}">

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

        {{-- Contact List Start --}}
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Contacts Form Users List</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SI No</th>
                                        <th>User name</th>
                                        <th>User Email</th>
                                        <th>User phone</th>
                                        <th>User Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $item->user_name }}</td>
                                            <td>{{ $item->user_email }}</td>
                                            <td>{{ $item->user_phone }}</td>
                                            <td>{{ $item->user_message }}</td>
                                            <td>
                                                <form action="/admin/contact/{{ $item->id }}/delete" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" class="text-decoration-none me-2 border-0 badge badge-danger"
                                                    onclick="return confirm('Are you sure to delete this post?')"
                                                    >Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                            <div class="mt-3 float-end">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
