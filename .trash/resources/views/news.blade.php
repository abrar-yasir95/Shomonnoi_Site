@extends('layouts.master')


@section('content')
    <div class="page-header header-filter" data-parallax="true"
         style="background-image: url('{{asset('assets/img/bg_shomonnoi.jpeg')}}');"
         xmlns:width="http://www.w3.org/1999/xhtml">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h2 class="title">{{$title}}</h2>
                        <p class="paragraph">{{$subtitle}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised bg-dark">
        <div class="section section-basic">
            <div class="container">
                <div class="row justify-content-center" align="center">
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        @forelse($blog as $single_blog)
                        <a href="{{$single_blog->link}}" target="_blank">
                            <div class="card mb-3">
                                @if(strlen($single_blog->image)>2)
                                <img class="card-img-top" src="{{$single_blog->image}}" rel="nofollow" alt="Card image cap" height="300px">
                                @endif
                                <div class="card-body">
                                    <h3 class="card-title">{{$single_blog->title}}</h3>
                                    <p class="card-text text-muted">{{Str::substr($single_blog->description, 0, 150)}} ...</p>
                                    <p class="card-text">
                                        <small class="text-muted float-left">Created: {{$single_blog->created_at->toFormattedDateString()}}</small>
                                        <small class="text-muted float-right">Last updated {{$single_blog->updated_at->toFormattedDateString()}}</small>
                                    </p>
                                </div>
                            </div>
                        </a>
                        @empty

                        @endforelse
                    </div>
                </div>
                <ul class="pagination justify-content-center">{{$blog->links()}}</ul>
            </div>
        </div>
    </div>

    <!--================Blog Area =================-->
{{--    <div class="make_donation_area whole_wrap_news">--}}
{{--        <div class="container">--}}

{{--            <div class="row justify-content-center" align="center">--}}
{{--                <div class="col-lg-7 mb-5 mb-lg-0">--}}
{{--                    <div class="blog_right_sidebar">--}}
{{--                        @forelse($blog as $single_blog)--}}
{{--                            <article class="single_help_wrap blog_item_short">--}}
{{--                                <div class="help_content blog_details">--}}
{{--                                    <a class="d-inline-block blog-info-link" href="{{$single_blog->link}}" target="_blank">--}}
{{--                                        @if(strlen($single_blog->image)>2)--}}
{{--                                            <div class="blog_item_img">--}}
{{--                                                <img class="card-img rounded-0" height="350px" style="object-fit: contain" src="{{$single_blog->image}}" alt="">--}}
{{--                                            </div>--}}
{{--                                            <br>--}}
{{--                                        @endif--}}
{{--                                        <h2>{{$single_blog->title}}</h2>--}}
{{--                                    </a>--}}
{{--                                    <ul class="blog-info-link">--}}
{{--                                        <li><i class="fa fa-calendar"></i>{{$single_blog->created_at->toFormattedDateString()}}</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </article>--}}
{{--                        @empty--}}

{{--                        @endforelse--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--================Blog Area =================-->



@endsection
