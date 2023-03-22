@extends('dashboard.layouts.main')
@section('content')
    <div class="container-fluid">
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-12" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="/dashboard/posts/create" class="btn btn-primary mt-1">Create New Post</a>
                    </div>
                    <table class="table ">
                        <thead>
                            <tr>

                                <th scope="col"><b>Number</b></th>
                                <th scope="col"><b>Title</b></th>
                                <th scope="col"><b>Categories</b></th>
                                <th scope="col"><b>Tools</b></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>

                                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge badge-pill badge-cyan"> <span
                                                class="fas fa-info mt-1 mb-1 m-r-5 m-l-5"></span></a>
                                        <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                            class="badge badge-pill badge-warning"><span class="fas fa-pencil-alt mt-1 mb-1 m-r-5 m-l-5"></span></a>

                                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge badge-pill badge-danger border-0"
                                                onclick="return confirm('Are you sure?')"><span
                                                    class=" fas fa-trash-alt mt-1 mb-1 m-r-5 m-l-5"></span></button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
    </div>
@endsection
