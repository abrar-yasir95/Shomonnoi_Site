@extends('layouts.master')

@section('content')

    <div class="page-header header-filter" data-parallax="true"
         style="background-image: url('{{asset('assets/img/bg_shomonnoi.jpeg')}}');" xmlns:width="http://www.w3.org/1999/xhtml">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h2 class="title">ShomonnoiBD.</h2>
                        <p class="paragraph">The world has not seen such an alarming situation due to the Corona outbreak after world war II. Nearly all the countries have been affected by this devastating virus and Bangladesh is no exception. It's high time we stand together to fight against this invisible enemy. ShomonnoiBD is an initiative to accumulate donors, volunteers, NGO's, private and government stakeholders. We wish to reach every corner of our country connecting individuals and voluntary organizations fighting there against this outbreak. We hope to provide them with the best possible help through our information system. Join this fight against the COVID-19 pandemic being a part of shomonnoibd.com.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="main main-raised">

    <div class="section section-basic">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-4">
                    <div class="causes_info">
                        <div class="section_title">
                            <span class="text-primary">Recent Infection Map</span>
                            <h2 class="title">
                                Support helpless <br>
                                people during <br>
                                corona outbreak
                            </h2>
                        </div>
                        <h4 class="text-muted">We will supply food, donations, and necessary items to the under privileged families.
                            Your contribution will help them survive during this corona outbreak.
                        </h4>
                    </div>
                </div>
                <div class="col-xl-8 col-md-8">
                    <div class="causes_thumb">
                        <style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style><div class="embed-container"><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Daily Corona Update in BD" src="//shomonnoibd.maps.arcgis.com/apps/Embed/index.html?webmap=44b7ba5ecd4147eca764eb09e773c290&extent=87.0681,22.3987,93.4731,25.4064&zoom=true&previewImage=false&scale=true&legend=true&disable_scroll=false&theme=dark"></iframe></div>
                        <div class="cause_info">
                            <div class="section_title">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <span class="alert-info text-center justify-content-center d-block text-dark">Click the dots to see details</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="alert-danger text-center justify-content-center d-block text-dark">Source: IEDCR</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- causes_area_end -->



    <!-- GIS MAP AND NEWS AREA START -->

    <div class="bg-dark section">
{{--    <div class="section section-tabs">--}}
        <div class="container">
            <div class="row align-items-lg-start" align="center">
                <div class="col-xl-8 col-md-8">
                    <div class="section_title">
                        <span></span>
                        <h3 class="text-white title">
                            Dynamic PPE Distribution
                        </h3>
                    </div>
                    <br>
                    <div class="causes_thumb">
                        <div class="embed-container">
                            <iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Final  2" src="//shomonnoibd.maps.arcgis.com/apps/Embed/index.html?webmap=2b634c5fce094595a3db3c8e902d8284&extent=86.941,22.2093,93.346,25.2213&zoom=true&previewImage=false&scale=true&legend=true&disable_scroll=false&theme=dark"></iframe>
                        </div>
                        <div class="cause_info">
                            <div class="section_title">
                                <div class="row no-gutters">
                                    <div class="col-md-9">
                                        <span class="alert-danger text-center justify-content-center d-block text-dark">Source: "Manus Manusher Jonnyo", "Pay it Forward" and in collaboration with "Ministry of Health"</span>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="alert-info text-center justify-content-center d-block text-dark">Click the dots to see details</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="section_title">
                        <span></span>
                        <h3 class="text-white title">
                            Recent News Updates
                        </h3>
                    </div>
                    <br>

                    <div class="blog_right_sidebar">
                        @forelse($blog as $single_blog)
{{--                            <article class="single_help_wrap blog_item_short">--}}
{{--                                <div class="help_content blog_details">--}}
{{--                                    <a class="d-inline-block blog-info-link" href="{{$single_blog->link}}">--}}
{{--                                        <h2>{{$single_blog->title}}</h2>--}}
{{--                                    </a>--}}
{{--                                    <ul class="blog-info-link">--}}
{{--                                        <li><i class="fa fa-calendar"></i>{{$single_blog->created_at->toFormattedDateString()}}</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </article>--}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <a href="{{$single_blog->link}}"><h4 class="card-title">{{$single_blog->title}}</h4></a>
{{--                                        <p class="category">Category subtitle</p>--}}
                                    </div>
                                    <div class="card-body">
                                        <h6><i class="far fa-calendar-alt"></i>&nbsp; {{$single_blog->created_at->toFormattedDateString()}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h3 class="text-danger">No News Available!</h3>
                        @endforelse
                        <a href="/news" class="btn btn-info">View All News</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- GIS MAP AND NEWS AREA END -->

    <div class="section ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-4">
                    <div class="causes_info">
                        <div class="section_title">
                            <span class="text-primary">Safety Tips</span>
                            <h3 class="title">
                                Stay Home, Stay Safe
                            </h3>
                        </div>
                        <ul class="unordered-list text-muted">
                            <li><h4>Stay Home and Wash Hands for 20 seconds.</h4></li>
                            <li><h4>Use masks and Hand Sanitizer to avoid contagion.</h4></li>
                            <li><h4>Contact Dr. if you have sore throat, high fever and cough.</h4></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-md-8">
                    <div class="causes_thumb">
                        <img class="img-fluid" src="{{asset('img/banner/corona.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- help_area_start -->
    <div class="bg-dark section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <div class="help_info">
                        <div class="section_title">
                            <span class="text-info">Help Them</span>
                            <h3 class="text-white title">
                                They Need
                                Your Help
                            </h3>
                        </div>
                        <h4 class="text-white">Every organization and some individual persons are working day
                            and night to give support during this corona outbreak.
                            Your small donation can bring joy to many families.
                        </h4>
                        <a href="{{asset('/organizations')}}" class="text-success">See All Organizations</a>
                    </div>
                </div>
                <div class="col-xl-9">

                    <div id="carouselExampleIndicators" class="carousel slide align-bottom" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
{{--                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-5">
                                        <div class="card card_custom_width_height">

                                            <img class="card-img-top" src="{{asset('img/help/ovoynogor.gif')}}" rel="nofollow" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="card-title">অভয়নগর সমন্বিত
                                                    করোনা মোকাবিলা উদ্যোগ</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card card_custom_width_height">
                                            <img class="card-img-top" src="{{asset('img/help/ahovan.jpg')}}" rel="nofollow" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="card-title">Donate To <br>
                                                    Ahoban Foundation</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-5">
                                        <div class="card card_custom_width_height">
                                            <img class="card-img-top" src="{{asset('img/help/ovoynogor.gif')}}" rel="nofollow" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="card-title">অভয়নগর সমন্বিত
                                                    করোনা মোকাবিলা উদ্যোগ</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card card_custom_width_height">
                                            <img class="card-img-top" src="{{asset('img/help/ahovan.jpg')}}" rel="nofollow" alt="Card image cap">
                                            <div class="card-body text-center">
                                                <h4 class="card-title">Donate To <br>
                                                    Ahoban Foundation</h4>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- help_area_end -->

</div>
@endsection
