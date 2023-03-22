@extends('dashboard.layouts.main')
@section('content')
             <div class="container-fluid">
                <div class="row el-element-overlay">
                    @foreach ($categories as $category)
                     <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1" style="max-height: 140px; overflow:hidden;" >
                                    <img  src="{{ asset('storage/' . $category->image) }}" alt="user" />
                                    <div class="el-overlay">
                                        <ul class="list-style-none el-info">
                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ asset('storage/' . $category->image) }}"><i class="mdi mdi-magnify-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h4 class="m-b-0">{{ $category->name }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
@endsection
