@extends('layouts.master')


@section('content')

    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Donate</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="alert alert-success" role="alert">
                        Number Copied to Clipboard!
                    </div>
                    <p>
                        1. Please donate in this number. Click on the number to call.
                    </p>
                    <div class="d-lg-inline-flex align-items-baseline">
                        <p id="output"></p>
                        &nbsp;
                        &nbsp;
                        <a class="btn btn-outline-primary" id="outputModal"></a>
                    </div>
                    <p>
                        2. Kindly use <strong>Reference: "shomonnoibd"</strong> for confirmation.
                        Thank You
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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
        <!-- help_area_start -->
        <div class="section section-basic">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                        <div class="help_info">
                            <div class="section_title mb-80">
                                <p class="text-info text-center align-self-center">List of Organizations</p>
{{--                                <h3 class="text-center title">--}}
{{--                                    They are Waiting for your help, Make a Donation <br>--}}
{{--                                    to involve with humanitarian work.--}}
{{--                                </h3>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @forelse($organizations as $organization)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="card card-nav-tabs text-center">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">{{$organization->name}}</h4>
                                    <div class="social-line">
                                        @if(!is_null($organization->fb_link))
                                            <a href="{{$organization->fb_link}}" class="btn btn-just-icon btn-link text-white" target="_blank"> <i
                                                    class="fab fa-facebook-square"></i>
                                            </a>
                                        @endif
                                        @if(!is_null($organization->website))
                                            <a href="{{$organization->website}}" class="btn btn-just-icon btn-link text-white" target="_blank"> <i
                                                    class="fa fa-globe"></i>
                                            </a>
                                        @endif
                                        @if(!is_null($organization->email))
                                            <a href="mailto:{{$organization->email}}" class="btn btn-just-icon btn-link text-white" target="_blank"> <i
                                                    class="fa fa-envelope"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-body">

                                    <h5 class="card-text text-info font-weight-bold">{{$organization->activity}}</h5>
                                    <p class="card-text text-muted">{{$organization->area}}</p>
                                    <div>
                                        <a class="font-weight-bold" href="/organizations/{{$divisions->find($organization->division_id)->name}}" target="_blank">{{$divisions->find($organization->division_id)->name}}</a>
                                    </div>
                                    <div>
                                        @if(is_null($organization->phone_number))
                                            Contact: N/A
                                        @else
                                            <a href="tel:+88{{$organization->phone_number}}"
                                               class="btn btn-primary">Call</a>
                                        @endif
                                    </div>

                                </div>
                                <div class="card-footer text-muted justify-content-center">
                                    <ul class="nav nav-tabs justify-content-center d-inline-flex align-items-baseline">

                                        @forelse($payments as $payment)
                                            @if($payment->organization_id == $organization->id)
                                                @if(!is_null($payment->bkash))
                                                    <li class="nav-item">
                                                        <p id="p1" hidden>+88{{$payment->bkash}}</p>
                                                        <button type="button" class="btn btn-outline-danger"
                                                                onclick="copyToClipboard('#p1', 'Bkash Number: ','+88{{$payment->bkash}}')"
                                                                data-toggle="modal"
                                                                data-target="#paymentModal">
                                                            <img width="50px" height="25px" src="{{asset('img/bkash.png')}}"
                                                                 alt="">
                                                        </button>
                                                    </li>
                                                @endif

                                                @if(!is_null($payment->rocket))
                                                    <li class="nav-item">
                                                        <p id="p1" hidden>+88{{$payment->rocket}}</p>
                                                        <button type="button" class="btn btn-outline-success"
                                                                onclick="copyToClipboard('#p1', 'Rocket Number: ','+88{{$payment->rocket}}')"
                                                                data-toggle="modal"
                                                                data-target="#paymentModal">
                                                            <img width="50px" height="25px" src="{{asset('img/rocket.png')}}"
                                                                 alt="">

                                                        </button>
                                                    </li>
                                                @endif

                                                @if(!is_null($payment->nagad))
                                                    <li class="nav-item">
                                                        <p id="p1" hidden>+88{{$payment->nagad}}</p>
                                                        <button type="button" class="btn btn-outline-primary"
                                                                onclick="copyToClipboard('#p1', 'Nagad Number: ', '+88{{$payment->nagad}}')"
                                                                data-toggle="modal"
                                                                data-target="#paymentModal">
                                                            <img width="50px" height="25px" src="{{asset('img/nagad.png')}}"
                                                                 alt="">

                                                        </button>
                                                    </li>
                                                @endif

                                                @if(!is_null($payment->online_gateway))
                                                    <li class="nav-item">
                                                        <a href="{{$payment->online_gateway}}" class="btn btn-success pt-3 pb-3">
                                                            Pay Online
                                                        </a>
                                                    </li>
                                                @endif
                                            @endif
                                        @empty
                                            <li class="nav-item">
                                                <p class="text-center">N/A</p>
                                            </li>
                                        @endforelse
                                    </ul>

                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="volunter_text text-center">
                            <h3>Will be updated soon!</h3>
                        </div>
                    @endforelse
                </div>
                 @if($organizations instanceof \Illuminate\Pagination\AbstractPaginator)
                    <ul class="pagination justify-content-center">{{$organizations->links()}}</ul>
                 @endif
            </div>
        </div>
        <!-- help_area_end -->
    </div>
@endsection
