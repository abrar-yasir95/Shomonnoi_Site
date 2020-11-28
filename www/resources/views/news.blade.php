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

    <div class="main main-raised">
        <div class="section pt-4" style="padding-bottom: 0px">
                @forelse($blog as $single_blog)
                <div class="pb-4 pl-4 pr-4">
                    <a href="{{$single_blog->link}}" target="_blank">
                        <div class="section bg-dark triangled-color" style="padding-top: 0px; padding-bottom: 0px; border-radius: 20px;">
                            <div class="container" style="padding-top: 40px; padding-bottom: 40px;
                            background-image: url('img/shomonnoi-logo-opacity30.png'); background-position: left;
                            background-size: contain; background-repeat: no-repeat; ">
                                <div class="row align-items-center">
                                    <div class="col-xl-7 col-md-7">
                                        <div class="causes_info">
                                            <div class="section_title">
                                                <h3 class="title mt-0 mb-1 text-rose" >
                                                    {{$single_blog->title}}
                                                </h3>
                                                <p class="paragraph text-white" style="font-weight: 100">
                                                    {!! Str::of(strip_tags($single_blog->description))->limit(300) !!}
                                                </p>
                                                <a class="text-info" href="{{$single_blog->link}}" target="_blank"
                                                   style="font-weight: bold">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-5 col-md-5">
                                        <img class="img-fluid w-100" src="{{$single_blog->image}}" alt="" style="height: 250px">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                @empty

                @endforelse

                <ul class="pagination justify-content-center pb-4 pl-2 pr-2">{{$blog->links()}}</ul>
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
