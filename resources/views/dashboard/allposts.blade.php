@extends('dashboard.layouts.main')
@section('search')
@section('content')
    @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
    @if (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
    @endif

    <div class="container-fluid">
        <div class="row el-element-overlay">

            @foreach ($posts as $post)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1" style="max-height: 140px; overflow:hidden;">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="{{ asset('storage/' . $post->image) }}"><i
                                                    class="mdi mdi-magnify-plus"></i></a></li>
                                        <li class="el-item"><a
                                                class="btn default btn-outline image-popup-vertical-fit el-link"
                                                href="/dashboard/posts/{{ $post->slug }}"><i class="fas fa-info"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">{{ $post->title }}</h4>
                                <p> </p>
                                <span class=""> By. <a class="text-decoration-none "
                                        href="allposts?author={{ $post->author->username }}">
                                        {{ $post->author->name }}</a>

                                    <p>Category : <a class="text-decoration-none "
                                            href="allposts?category={{ $post->category->slug }}">
                                            {{ $post->category->name }} </a> </p>
                                    {{ $post->created_at->diffForhumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
        @if ($posts->count())
                    <div class="d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
        @else
        <h1 class="text-center fs-4">No Post Found</h1>
        @endif()


@endsection
