@extends('layouts.master')


@section('content')
    <div class="page-header header-filter" data-parallax="true"
         style="background-image: url('{{asset('assets/img/bg_shomonnoi.jpeg')}}'); height: 30rem;"
         xmlns:width="http://www.w3.org/1999/xhtml">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h2 class="title">{{$title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised bg-dark">
        <div class="section section-basic">
            <div class="container">
                <div class="row justify-content-center" align="center">
                    <div class="col-lg-9 mb-5 mb-lg-0">
                        <div class="card mb-3">
                            @if(strlen($single_blog->image)>2)
                                <img class="card-img-top" src="{{$single_blog->image}}" rel="nofollow" alt="Card image cap">
                            @endif
                            <div class="card-body">
                                <h3 class="card-title text-dark">{{$single_blog->title}}</h3>
                                <h5 class="card-text text-dark" style="line-height: 30px">{{$single_blog->description}}</h5>

                                <p class="card-text">
                                    <small class="text-success float-left">Created: {{$single_blog->created_at->toFormattedDateString()}}</small>
                                    <small class="text-danger float-right">Last updated {{$single_blog->updated_at->toFormattedDateString()}}</small>
                                </p>
                            </div>
                            <div class="card-footer d-block">
                                @if(strlen($single_blog->reference)>2)
                                    <p class="text-secondary">Reference: </p>
                                    <a class="text-info" href="{{$single_blog->reference}}">{{$single_blog->reference}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
