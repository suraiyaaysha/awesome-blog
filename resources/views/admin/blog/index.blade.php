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
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Post List</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> SI No </th>
                                        <th> Post Title </th>
                                        <th> Short Details </th>
                                        <th> Post Author </th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ ++$i}}</td>
                                        <td>{{ $post->title }}</td>
                                        <td> {{ $post->short_details }} </td>
                                        <td> {{ $post->author }} </td>
                                        <td class="d-inline-flex">
                                            <a href="/admin/blog/{{ $post->id }}/show" class="text-decoration-none me-2 badge badge-success">Show</a>
                                            <a href="/admin/blog/{{ $post->id }}/edit" class="text-decoration-none me-2 badge badge-warning">Edit</a>

                                            <form action="/admin/blog/{{ $post->id }}/delete" method="POST">
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
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
