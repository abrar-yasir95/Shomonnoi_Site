@extends('layouts.master')


@section('content')
    <div class="page-header header-filter mb-xl-5" data-parallax="true"
         style="background-image: url('{{asset('assets/img/bg_shomonnoi.jpeg')}}');"
         xmlns:width="http://www.w3.org/1999/xhtml">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h2 class="title">About Us!</h2>
                        <p class="paragraph">Maintained and Introduced by Current Students and Alumni of BUET</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised bg-dark">

        <div class="section section-basic">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-md-3 mr-5">
                        <div class="about_image">
                            <img src="img/bd_logo.png" alt="" width="100%">
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 ml-5">
                        <div class="about_image">
                            <img src="img/star_logo.png" alt="" width="100%">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="">
                            <h3 class="title text-info">Our Mission</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="">
                            <h5 class="text-white">The world has not seen such an alarming situation due to the Corona outbreak after World War II.
                                Nearly all the countries have been affected by this devastating virus and Bangladesh is also no exception.
                                It's high time we stand together to fight against this invisible enemy.
                                ShomonnoiBD is an initiative to accumulate donors, volunteers, NGOs, private and government stakeholders.
                                </h5>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="">
                            <h5 class="text-white">We wish to reach every corner of our country connecting individuals and voluntary organizations fighting there against this outbreak.
                                We hope to provide them with the best possible help through our information system.
                                Join this fight against the COVID-19 pandemic being a part of shomonnoibd.com</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- become_volunter_start -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mx-auto">
                        <div class="card card-nav-tabs">
                            <div class="card-header card-header-info">
                                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs justify-content-center" data-tabs="tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active text-center" href="#home" data-toggle="tab">
                                                    <i class="material-icons">call</i> Rahat
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-center" href="#updates" data-toggle="tab">
                                                    <i class="material-icons">call</i> Shaumik
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="tab-content text-center">
                                    <div class="tab-pane active" id="home">
                                        <h3 class="title text-dark">Contact Us</h3>
                                        <div class="row justify-content-center">
                                            <a class="btn btn-info" href="tel:+8801718935386">
                                                <i class="material-icons">call</i> Call Rahat
                                            </a>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="updates">
                                        <h3 class="title text-dark">Contact Us</h3>
                                        <div class="row justify-content-center">
                                            <a class="btn btn-info" href="tel:+8801554546483">
                                                <i class="material-icons">call</i> Call Shaumik
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <a href="/policy" class="text-center btn btn-info">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- become_volunter_end -->

    </div>
@endsection
