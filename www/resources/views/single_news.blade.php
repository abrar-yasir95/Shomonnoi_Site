@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
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
    <!-- Floating Social Media bar Starts -->
    <div class="float-sm">
        <a class="fl-fl float-fb" href="https://www.facebook.com/sharer/sharer.php?u=http://shomonnoibd.com/{{$single_blog->link}}&display=popup" target="_blank">
            <i class="fab fa-facebook-square d-inline-flex"></i><p class="d-inline-flex text-white" style="font-size: 18px">Share To Facebook</p>
        </a>

        <a class="fl-fl float-tw" href="https://twitter.com/intent/tweet?source=tweetbutton&text=this.name&url=http://shomonnoibd.com/{{$single_blog->link}}" target="_blank">
            <i class="fab fa-twitter text-info d-inline-flex"></i><p class="d-inline-flex text-info" style="font-size: 18px">Share To Twitter</p>
        </a>

        <a class="fl-fl float-gp" href="https://www.linkedin.com/shareArticle?mini=true&url=http://shomonnoibd.com/{{$single_blog->link}}" target="_blank">
            <i class="fab fa-linkedin d-inline-flex"></i><p class="d-inline-flex text-white" style="font-size: 18px">Share To Linkedin</p>
        </a>

        <a class="fl-fl float-rs" href="https://wa.me/?text=http%3A%2F%2Fshomonnoibd.com/{{$single_blog->link}}%2F" target="_blank">
            <i class="fab fa-whatsapp d-inline-flex text-success"></i><p class="d-inline-flex text-success" style="font-size: 18px">Share To Whatsapp</p>
        </a>

{{--        <a class="fl-fl float-ig" href="https://plus.google.com/share?url=http//shomonnoibd.com/{{$single_blog->link}}" target="_blank">--}}
{{--            <i class="fab fa-google-plus d-inline-flex text-danger"></i><p class="d-inline-flex text-danger" style="font-size: 18px">Share To Google+</p>--}}
{{--        </a>--}}
{{--        <div class="fl-fl float-tw">--}}
{{--            <i class="fa fa-twitter"></i>--}}
{{--            <a href="" target="_blank">Follow us!</a>--}}
{{--        </div>--}}
{{--        <div class="fl-fl float-gp">--}}
{{--            <i class="fa fa-google-plus"></i>--}}
{{--            <a href="" target="_blank">Recommend us!</a>--}}
{{--        </div>--}}
{{--        <div class="fl-fl float-rs">--}}
{{--            <i class="fa fa-rss"></i>--}}
{{--            <a href="" target="_blank">Follow via RSS</a>--}}
{{--        </div>--}}
{{--        <div class="fl-fl float-ig">--}}
{{--            <i class="fa fa-instagram"></i>--}}
{{--            <a href="" target="_blank">Follow us!</a>--}}
{{--        </div>--}}
{{--        <div class="fl-fl float-pn">--}}
{{--            <i class="fa fa-pinterest"></i>--}}
{{--            <a href="" target="_blank">Follow us!</a>--}}
{{--        </div>--}}
    </div>
    <!-- Floating Social Media bar Ends -->
    <div class="main main-raised bg-dark">
        <div class="section section-basic" style="padding-top: 0px; padding-bottom: 0px">
           <div class="card pb-4">
{{--                            <a class="" href="https://www.facebook.com/sharer/sharer.php?u=http://shomonnoibd.com/{{$single_blog->link}}&display=popup"><i class="fab fa-facebook fa-2x text-info text-center"></i></a>--}}
                        @if(strlen($single_blog->image)>2)
                                <img class="card-img-top" src="{{$single_blog->image}}" rel="nofollow" alt="Card image cap" style="height: 400px">
                            @endif
                            <div class="card-body">
                                <h3 class="card-title text-dark text-center">{{$single_blog->title}}</h3>
                                <div class="card-text text-dark pl-4 pr-4" >
                                    {!! htmlspecialchars_decode($single_blog->description) !!}</div>

                                <p class="card-text pl-4 pr-4">
                                    <small class="text-success float-left">Created: {{$single_blog->created_at->toFormattedDateString()}}</small>
                                    <small class="text-danger float-right">Last updated {{$single_blog->updated_at->toFormattedDateString()}}</small>
                                </p>
                            </div>
                            <div class="card-footer d-block text-center">
                                @if(strlen($single_blog->reference)>2)
                                    <p class="text-secondary">Reference: </p>
                                    <a class="text-info" href="{{$single_blog->reference}}">{{$single_blog->reference}}</a>
                                @endif
                            </div>
                        </div>
        </div>
    </div>


@endsection
