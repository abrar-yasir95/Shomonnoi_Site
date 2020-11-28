@extends('layouts.master')

@section('content')

    @include('layouts.header')

    <div class="main main-raised">

        <div class="section-basic section" style="padding-top: 40px; padding-bottom: 20px">
            {{--    <div class="section section-tabs">--}}
            <div class="container">
                <div class="row align-items-lg-start" align="center">
                    <div class="col-xl-12 col-md-12">
                        <div class="section_title mt-auto pt-0 pb-0 mb-auto">
                            <h3 class="text-black-50 title mt-0 pt-0 mb-0" style="font-weight: 800; font-size: 32px;">
                                <span style="color: red">RECENT</span> ACTIVITIES
                            </h3>
                        </div>
                        <br>

                            <div class="owl-carousel pb-0">
                                <div>
                                    <h4 class="card-title">Bogura</h4>
                                    <div class="card mt-0">
                                        <img class="card-img-top carousel-image-custom350"
                                             src="{{asset('img/relief/bogura/b1.png')}}"
                                             rel="nofollow" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">Relief activity in Bogura.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="card-title">Brahmanbaria</h4>
                                    <div class="card mt-0">
                                        <img class="card-img-top carousel-image-custom350"
                                             src="{{asset('img/relief/brahmanbaria/brah1.png')}}"
                                             rel="nofollow" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">Relief activity in Brahmanbaria.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="card-title">Ghashforing</h4>
                                    <div class="card mt-0">
                                        <img class="card-img-top carousel-image-custom350"
                                             src="{{asset('img/relief/ghashforing/g1.png')}}"
                                             rel="nofollow" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">Relief activity in Ghashforing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="card-title">Khagrachari</h4>
                                    <div class="card mt-0">
                                        <img class="card-img-top carousel-image-custom350"
                                             src="{{asset('img/relief/khagrachari/k1.png')}}"
                                             rel="nofollow" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">Relief activity in Khagrachari.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="card-title">Lakshmipur</h4>
                                    <div class="card mt-0">
                                        <img class="card-img-top carousel-image-custom350"
                                             src="{{asset('img/relief/lakshmipur/l1.png')}}"
                                             rel="nofollow" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">Relief activity in Lakshmipur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="card-title">Natore</h4>
                                    <div class="card mt-0">
                                        <img class="card-img-top carousel-image-custom350"
                                             src="{{asset('img/relief/natore/n1.png')}}"
                                             rel="nofollow" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">Relief activity in Natore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="card-title">Panchagarh</h4>
                                    <div class="card mt-0">
                                        <img class="card-img-top carousel-image-custom350"
                                             src="{{asset('img/relief/panchagarh/p1.png')}}"
                                             rel="nofollow" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">Relief activity in Panchagarh.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="card-title">Tangail</h4>
                                    <div class="card mt-0">
                                        <img class="card-img-top carousel-image-custom350"
                                             src="{{asset('img/relief/tangail/t1.png')}}"
                                             rel="nofollow" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">Relief activity in Tangail.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-xl-4">--}}
                            {{--                                    <h4 class="card-title">Location</h4>--}}
                            {{--                                    <div class="card mt-0">--}}
                            {{--                                        <img class="card-img-top"--}}
                            {{--                                             src="https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80"--}}
                            {{--                                             rel="nofollow" alt="Card image cap">--}}
                            {{--                                        <div class="card-body">--}}
                            {{--                                            <p class="card-text">Some quick example text to build on the card title and--}}
                            {{--                                                make up the bulk of the card's content.</p>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-xl-4">--}}
                            {{--                                    <h4 class="card-title">Location</h4>--}}
                            {{--                                    <div class="card mt-0">--}}
                            {{--                                        <img class="card-img-top"--}}
                            {{--                                             src="https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80"--}}
                            {{--                                             rel="nofollow" alt="Card image cap">--}}
                            {{--                                        <div class="card-body">--}}
                            {{--                                            <p class="card-text">Some quick example text to build on the card title and--}}
                            {{--                                                make up the bulk of the card's content.</p>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="col-xl-4">--}}
                            {{--                                    <h4 class="card-title">Location</h4>--}}
                            {{--                                    <div class="card mt-0">--}}
                            {{--                                        <img class="card-img-top"--}}
                            {{--                                             src="https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80"--}}
                            {{--                                             rel="nofollow" alt="Card image cap">--}}
                            {{--                                        <div class="card-body">--}}
                            {{--                                            <p class="card-text">Some quick example text to build on the card title and--}}
                            {{--                                                make up the bulk of the card's content.</p>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}


                    </div>

                </div>
            </div>
        </div>

        <div class="section bg-dark  triangled-color" style=" padding-top: 0px; padding-bottom: 0px;
            ">
            <div class="container" style="padding-top: 0px; padding-bottom: 0px;
            background-image: url('img/shomonnoi-logo-opacity50.png'); background-position: left;
            background-size: contain; background-repeat: no-repeat; "
            >
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval="7000"
                 style="padding-top: 40px; padding-bottom: 40px;">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @php($k=0)
                    @forelse($blog as $single_blog)
                        @if($k==0)
                            <div class="carousel-item active">
                                <div class="row align-items-center">
                                    <div class="col-xl-7 col-md-7">
                                        <div class="causes_info">
                                            <div class="section_title">
                                                <h3 class="title mt-0 mb-1 text-rose">
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
                        @else
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-xl-7 col-md-7">
                                        <div class="causes_info">
                                            <div class="section_title">
                                                <h3 class="title mt-0 mb-1 text-rose">
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
                        @endif
                        @php($k=$k+1)
                    @empty
                    @endforelse
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>

    <div class="section half-color" style="padding-top: 40px; padding-bottom: 40px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <h2 class="title">
                        RESEARCH BLOG
                    </h2>
                </div>
                @forelse($research as $single_research)
                    <div class="col-xl-3">
                        <div class="card mt-0">
                            <img class="card-img-top carousel-image-custom"
                                 src="{{$single_research->image}}"
                                 rel="nofollow" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="title mt-0 mb-0">
                                    {{$single_research->title}}
                                </h4>
                                <p class="card-text">
                                    {!! Str::of(strip_tags($single_research->description))->limit(50) !!}
                                </p>
                                <a href="{{$single_research->link}}" target="_blank" class="text-danger title">READ MORE</a>

                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>


    <div class="section bg-light" style="padding-top: 40px; padding-bottom: 40px;">
        <div class="container">
            <div class="row align-items-lg-start" align="center">
                <div class="col-xl-12 col-md-12">
                    <div class="section_title mt-auto pt-0 pb-0 mb-auto">
                        <h3 class="text-black-50 title mt-0 pt-0 mb-0" style="font-weight: 800; font-size: 32px;">
                            <span style="color: red">PARTNER</span> ORGANIZATION
                        </h3>
                    </div>
                    <br>


                    <!-- Set up your HTML -->
                    <div class="owl-carousel owl-theme">
                        <div class="card mt-0 card-overlay">
                            <img class="card-img-top carousel-image-custom350"
                                 src="{{asset('img/organizations/DC-4.png')}}"
                                 rel="nofollow" alt="Card image cap">
                            <div class="centered w-100">
{{--                                <div class="text-custom">Hello World</div>--}}
                                    <h4 class="title mt-0 mb-0 text-white">
                                        Doridro Charity Foundation
                                    </h4>
                                    <p class="card-text mt-0 mb-0">30 Posts</p>
                                    <a href="" class="text-info title">READ MORE</a>
                            </div>
{{--                            <div class="card-body">--}}
{{--                                <h4 class="title mt-0 mb-0">--}}
{{--                                    Doridro Charity Foundation--}}
{{--                                </h4>--}}
{{--                                <p class="card-text">30 Posts</p>--}}
{{--                                <a href="" class="text-danger title">READ MORE</a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="card mt-0">
                            <img class="card-img-top carousel-image-custom350"
                                 src="{{asset('img/organizations/G8.png')}}"
                                 rel="nofollow" alt="Card image cap">
                            <div class="centered w-100">
                                <h4 class="title mt-0 mb-0 text-white">
                                    Ghasforing Organization
                                </h4>
                                <p class="card-text mt-0 mb-0">22 Posts</p>
                                <a href="" class="text-info title">READ MORE</a>
                            </div>
                        </div>
                        <div class="card mt-0">
                            <img class="card-img-top carousel-image-custom350"
                                 src="{{asset('img/organizations/L2.png')}}"
                                 rel="nofollow" alt="Card image cap">
                            <div class="centered w-100">
                                <h4 class="title mt-0 mb-0 text-white">
                                    Doridro Charity Foundation
                                </h4>
                                <p class="card-text mt-0 mb-0">19 Posts</p>
                                <a href="" class="text-info title">READ MORE</a>
                            </div>
                        </div>
                        <div class="card mt-0">
                            <img class="card-img-top carousel-image-custom350"
                                 src="{{asset('img/organizations/M2.png')}}"
                                 rel="nofollow" alt="Card image cap">
                            <div class="centered w-100">
                                <h4 class="title mt-0 mb-0 text-white">
                                    Charity Drops
                                </h4>
                                <p class="card-text mt-0 mb-0">15 Posts</p>
                                <a href="" class="text-info title">READ MORE</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{--                <div class="row">--}}
            {{--                    <div class="col-xl-12 ">--}}
            {{--                        <div id="carousel" >--}}
            {{--                            <img class="card-img" style="width: 300px" src="https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80" rel="nofollow" alt="Card image">--}}
            {{--                            <img class="card-img" style="width: 300px" src="https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80" rel="nofollow" alt="Card image">--}}
            {{--                            <img class="card-img" style="width: 300px" src="https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80" rel="nofollow" alt="Card image">--}}

            {{--                        </div>--}}
            {{--                        <a href="#" id="prev" class="text-info" style="display: block; position: absolute; top: 50%">--}}
            {{--                            <i class="fa fa-angle-left fa-2x"></i>--}}
            {{--                        </a>--}}
            {{--                        <a href="#" id="next" class="text-danger" style="display: block; position: absolute; top: 50%; right: 1%">--}}
            {{--                            <i class="fa fa-angle-right fa-2x"></i>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}


            {{--                <a class="carousel-control-prev text-danger" role="button" data-slide="prev" id="prev">--}}
            {{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            {{--                    <span class="sr-only">Previous</span>--}}
            {{--                </a>--}}
            {{--                <a class="carousel-control-next" role="button" data-slide="next" id="next">--}}
            {{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            {{--                    <span class="sr-only">Next</span>--}}
            {{--                </a>--}}
        </div>
    </div>
    </div>
@endsection
