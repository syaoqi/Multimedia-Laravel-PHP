@extends('dashboard.layouts.main')
@section('content')
    <div class="container-fluid">
        <h1 class="mb-3"></h1>
        <div class="row el-element-overlay">
            <div class="col-lg-8 col-md-8">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="{{ asset('storage/' . $post->image) }}"
                                alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link"
                                            href="{{ asset('storage/' . $post->image) }}"><i
                                                class="mdi mdi-magnify-plus"></i></a></li>
                                    {{-- <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">{{ $post->title }}</h4> <span class="text-muted"> Category :
                                {{ $post->category->name }}</span>
                            <article class="my-3 ">
                                {!! $post->body !!}
                            </article>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  {{-- <div class="col-md-8">


        <div class="card">
            @foreach ($comments as $comment)
            <div class="card-body">
                <h5 class="card-title">User</h5>

                <p>{{ $comment->deskripsi }}</p>

            </div>
            @endforeach

            <form class="form-horizontal">
                <div class="card-body">
                    <h4 class="card-title">Comment</h4>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Write</label>
                        <div class="col-sm-9">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
@endsection
