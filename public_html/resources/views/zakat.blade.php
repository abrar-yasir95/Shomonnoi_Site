@extends('layouts.master')


@section('content')
    <link rel="stylesheet" href="{{asset('css/custom_zakat.css')}}">
    <div class="page-header header-filter" data-parallax="true"
         style="background-image: url('{{asset('assets/img/bg_zakat.png')}}'); height: 450px; object-fit: scale-down"
         xmlns:width="http://www.w3.org/1999/xhtml">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
{{--                        <h2 class="title">Zakat Calculator</h2>--}}
                        <h2 class="title" id="zakat"></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class=" text-white fl-fl float-fb fade-in">
            <span class="total_result_sm">মোট <br>
                যাকাতঃ </span>
{{--            <output class="" type="number" name="totalZakat" id="totalZakat" value="0" style="font-size: 30px">0</output>--}}
{{--            <span style="font-size: 30px">&#2547;<br> (টাকা)</span>--}}
        </div>

        <div class="text-white fl-fl float-tw fade-in" id="test">
            <output class="total_result" type="number" name="totalZakat" id="totalZakat" value="0">0</output>
            <span class="total_result_sm">&#2547;</span>
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
                                {{--                                <p class="text-info text-center align-self-center">List of Organizations</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">স্বর্ণের উপর যাকাত (২.৫%)</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mt-auto mb-auto">
                                        <img src="{{asset('img/gold.jpg')}}" alt=""
                                             style="border-radius: 150px; border: 2px solid grey; padding: 2px" class="icon_img">
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-7 bg-light pb-3 pt-1" style="border-radius: 10px">
                                        <div>
                                            <style>
                                                input[type="number"]::placeholder {
                                                    text-align: center;
                                                    font-weight: lighter;
                                                }
                                                input[type="number"] {
                                                    text-align: center;
                                                    border: 1px solid lightgray; border-radius: 5px;
                                                    height: available;
                                                }

                                            </style>
                                            <h4 class="card-text text-dark title mb-2 mt-2">২৪ ক্যারেট স্বর্ণ/
                                                অলঙ্কার </h4>
                                            <input class="mt-3" type="number" name="gold" id="24goldWeight"
                                                   placeholder="মোট স্বর্ণের ওজন (গ্রাম)" onchange="calculate24gold()">

                                            <input class="mt-3" type="number" name="gold" id="24goldUnitPrice"
                                                   placeholder="১ গ্রাম স্বর্ণের দাম" onchange="calculate24gold()">
                                            <br> <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="gold" id="24goldResult"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">২৪ ক্যারেট এর জন্য মোট
                                                যাকাত
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">২২ ক্যারেট স্বর্ণ/
                                                অলঙ্কার </h4>
                                            <input class="mt-3" type="number" name="gold" id="22goldWeight"
                                                   placeholder="মোট স্বর্ণের ওজন (গ্রাম)" onchange="calculate22gold()">

                                            <input class="mt-3" type="number" name="gold" id="22goldUnitPrice"
                                                   placeholder="১ গ্রাম স্বর্ণের দাম" onchange="calculate22gold()">
                                            <br> <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="gold" id="22goldResult"
                                                    class="text-success mt-3"
                                                    style="font-weight: normal; font-size: 16px">২২ ক্যারেট এর জন্য মোট
                                                যাকাত
                                            </output>
                                            <span class="text-success" style="font-weight: normal">&#2547; (টাকা)</span>

                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">১৮ ক্যারেট স্বর্ণ/
                                                অলঙ্কার </h4>
                                            <input class="mt-3" type="number" name="gold" id="18goldWeight"
                                                   placeholder="মোট স্বর্ণের ওজন (গ্রাম)" onchange="calculate18gold()">

                                            <input class="mt-3" type="number" name="gold" id="18goldUnitPrice"
                                                   placeholder="১ গ্রাম স্বর্ণের দাম" onchange="calculate18gold()">
                                            <br> <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="gold" id="18goldResult"
                                                    class="text-success mt-3"
                                                    style="font-weight: normal; font-size: 16px">১৮ ক্যারেট এর জন্য মোট
                                                যাকাত
                                            </output>
                                            <span class="text-success" style="font-weight: normal">&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-0 mt-2">অন্যান্য স্বর্ণ জাতীয়
                                                দ্রব্যের মূল্য </h4>
                                            <input type="number" name="gold" id="otherGoldValue"
                                                   placeholder="আনুমানিক মূল্য" onchange="calculateOtherGold()">
                                            <span class="text-success" style="font-weight: bold">= </span>
                                            <output type="number" name="gold" id="otherGoldResult"
                                                    class="text-success mt-3"
                                                    style="font-weight: normal; font-size: 16px"> অন্যান্য স্বর্ণ এর মোট
                                                যাকাত
                                            </output>
                                            <span class="text-success" style="font-weight: normal">&#2547; (টাকা)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center d-inline-block">
                                <hr class="alert-primary">
                                <span class="text-dark" style="font-weight: normal; font-size: 18px"> আপনার স্বর্ণগুলোর সমতুল্য মোট যাকাতের পরিমাণ &nbsp; = &nbsp;</span>
                                <output type="number" name="totalGold" id="totalGold" class="text-primary" value="0" style="font-weight: normal; font-size: 20px">0</output>
                                <span class="text-primary" style="font-weight: normal; font-size: 16px"> &nbsp; &#2547; (টাকা)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-success">
                                <h4 class="card-title">মূল্যবান পাথরের উপর যাকাত (২.৫%)</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mt-auto mb-auto">
                                        <img class="icon_img" src="{{asset('img/stone.jpg')}}" alt=""
                                             style="border-radius: 150px; border: 2px solid grey; padding: 2px">
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-7 bg-light pb-3 pt-1" style="border-radius: 10px">
                                        <div style="vertical-align: middle" class="pt-5">
                                            <h4 class="card-text text-dark title mb-2 mt-2">আপনার মালিকানায় থাকা মূল্যবান পাথর যেমন হীরা,
                                                <br>পান্না ইত্যাদির তৈরি অলংকার/অন্যান্য সামগ্রীর সর্বমোট বর্তমান বাজারমূল্য এখানে লিখুন </h4>
                                            <input class="mt-3" type="number" name="stone" id="preciousStoneValue"
                                                   placeholder="পাথরের আনুমানিক মূল্য" onchange="calculatePreciousStoneTotal()">
                                        </div>
                                </div>
                            </div>
                            </div>
                            <div class="card-footer justify-content-center d-inline-block">
                                <hr class="alert-success">
                                <span class="text-dark" style="font-weight: normal; font-size: 18px"> আপনার মূল্যবান পাথরগুলোর সমতুল্য মোট যাকাতের পরিমাণ &nbsp; = &nbsp;</span>
                                <output type="number" name="totalPreciousStone" id="totalPreciousStone" class="text-success" value="0" style="font-weight: normal; font-size: 20px">0</output>
                                <span class="text-success" style="font-weight: normal; font-size: 16px"> &nbsp; &#2547; (টাকা)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">রূপার উপর যাকাত (২.৫%)</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mt-auto mb-auto">
                                        <img class="icon_img" src="{{asset('img/silver.jpg')}}" alt=""
                                             style="border-radius: 150px; border: 2px solid grey; padding: 2px">
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-7 bg-light pb-3 pt-1" style="border-radius: 10px">
                                        <div style="vertical-align: middle" class="pt-5">
                                            <h4 class="card-text text-dark title mb-2 mt-2">
                                            গহনা, সাংসারিক কাজে ব্যবহৃত সামগ্রী বা অন্যান্য কাজে ব্যবহৃত রূপার<br>
                                            (সাধারনতঃ থালাবাসন ইত্যাদিতে রুপা ৯০% খাঁটি থাকে তাই মোট ওজনের ততটুকুই নিন)
                                            </h4>
                                            <input class="mt-3" type="number" name="gold" id="silverWeight"
                                                   placeholder="মোট রূপার ওজন (গ্রাম)" onchange="calculateTotalSilver()">
                                            <input class="mt-3" type="number" name="gold" id="silverUnitPrice"
                                                   placeholder="১ গ্রাম রূপার দাম" onchange="calculateTotalSilver()">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center d-inline-block">
                                <hr class="alert-info">
                                <span class="text-dark" style="font-weight: normal; font-size: 18px"> আপনার রূপার দ্রব্যগুলোর সমতুল্য মোট যাকাতের পরিমাণ &nbsp; = &nbsp;</span>
                                <output type="number" name="totalSilver" id="totalSilver" class="text-info" value="0" style="font-weight: normal; font-size: 20px">0</output>
                                <span class="text-info" style="font-weight: normal; font-size: 16px"> &nbsp; &#2547; (টাকা)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">হাতের টাকা বা ব্যাংকের টাকার উপর যাকাত (২.৫%)</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mt-auto mb-auto">
                                        <img class="icon_img" src="{{asset('img/taka2.jpg')}}" alt=""
                                             style="border-radius: 150px; border: 2px solid grey; padding: 2px">
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-7 bg-light pb-3 pt-1" style="border-radius: 10px">
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">হাতে রক্ষিত টাকার পরিমাণ</h4>
                                            <input type="number" name="cashHandValue" id="cashHandValue"
                                                   placeholder="হাতে মোট টাকার পরিমাণ" onchange="calculateCash()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="handCash" id="totalHandCash"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">ব্যাংকে সঞ্চয়ী একাউন্টে রক্ষিত টাকার পরিমাণ </h4>
                                            <input type="number" name="cashBankSavingsValue" id="cashBankSavingsValue"
                                                   placeholder="মোট টাকার পরিমাণ" onchange="calculateCash()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalBankSavings" id="totalBankSavings"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">ব্যাংকে সাধারণ একাউন্টে রক্ষিত টাকার পরিমাণ </h4>
                                            <input type="number" name="cashBankCurrentValue" id="cashBankCurrentValue"
                                                   placeholder="মোট টাকার পরিমাণ" onchange="calculateCash()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalBankCurrent" id="totalBankCurrent"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">ব্যাংকে ফিক্সড একাউন্টে রক্ষিত টাকার পরিমাণ </h4>
                                            <input type="number" name="cashDepositValue" id="cashDepositValue"
                                                   placeholder="মোট টাকার পরিমাণ" onchange="calculateCash()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalDeposit" id="totalDeposit"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center d-inline-block">
                                <hr class="alert-danger">
                                <span class="text-dark" style="font-weight: normal; font-size: 18px"> আপনার হাতে/ব্যাংকে রক্ষিত টাকার সমতুল্য মোট যাকাতের পরিমাণ &nbsp; = &nbsp;</span>
                                <output type="number" name="totalCash" id="totalCash" class="text-rose" value="0" style="font-weight: normal; font-size: 20px">0</output>
                                <span class="text-rose" style="font-weight: normal; font-size: 16px"> &nbsp; &#2547; (টাকা)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-warning">
                                <h4 class="card-title">পাওনা/বিনিয়োগ/ফান্ড/শেয়ার ইত্যাদির উপরে যাকাত (২.৫%)</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mt-auto mb-auto">
                                        <img class="icon_img" src="{{asset('img/loan.jpg')}}" alt=""
                                             style="border-radius: 150px; border: 2px solid grey; padding: 2px">
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-7 bg-light pb-3 pt-1" style="border-radius: 10px">
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">আত্মীয়স্বজন বা বন্ধুবান্ধবের কাছ থেকে পাওনা টাকা</h4>
                                            <input type="number" name="loanRelativesValue" id="loanRelativesValue"
                                                   placeholder="মোট টাকার পরিমাণ" onchange="calculateMonetaryAsset()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalLoanRelatives" id="totalLoanRelatives"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">সরকারী বন্ডে বিনিয়োগ</h4>
                                            <input type="number" name="bondsValue" id="bondsValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateMonetaryAsset()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalBonds" id="totalBonds"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">আজকের দিন পর্যন্ত প্রভিডেন্ট ফান্ডে জমা</h4>
                                            <input type="number" name="providentFundValue" id="providentFundValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateMonetaryAsset()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalProvidentFund" id="totalProvidentFund"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">বোনাসসহ আজকের দিন পর্যন্ত ইনস্যুরেন্স প্রিমিয়াম</h4>
                                            <input type="number" name="insuranceValue" id="insuranceValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateMonetaryAsset()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalInsurance" id="totalInsurance"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">লভ্যাংশসহ শেয়ার(স্টক) এর পরিমাণ
                                            <br>
                                            (আজকের বাজারদর ইনপুট দিন)
                                            </h4>
                                            <input type="number" name="stockValue" id="stockValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateMonetaryAsset()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalStock" id="totalStock"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">সরকারি নিরাপত্তা ডিপোজিট, ADR ইত্যাদি</h4>
                                            <input type="number" name="depositValue" id="depositValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateMonetaryAsset()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalDeposit" id="totalDeposit"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">চিট ফান্ড ও সমতুল্য প্রতিষ্ঠানে বিনিয়োগ</h4>
                                            <input type="number" name="investmentValue" id="investmentValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateMonetaryAsset()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalInvestment" id="totalInvestment"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">সম্পদের অন্যান্য উৎস</h4>
                                            <input type="number" name="otherWealthValue" id="otherWealthValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateMonetaryAsset()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalOtherWealth" id="totalOtherWealth"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center d-inline-block">
                                <hr class="alert-warning">
                                <span class="text-dark" style="font-weight: normal; font-size: 18px"> পাওনা/বিনিয়োগ/ফান্ড/শেয়ার এর উপর মোট যাকাতের পরিমাণ &nbsp; = &nbsp;</span>
                                <output type="number" name="totalMonetaryAsset" id="totalMonetaryAsset" class="text-warning" value="0" style="font-weight: normal; font-size: 20px">0</output>
                                <span class="text-warning" style="font-weight: normal; font-size: 16px"> &nbsp; &#2547; (টাকা)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">জমিজমা বা জমির উপর প্রপার্টির উপরে যাকাত (২.৫%)</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mt-auto mb-auto">
                                        <img class="icon_img" src="{{asset('img/property.jpg')}}" alt=""
                                             style="border-radius: 150px; border: 2px solid grey; padding: 2px">
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-7 bg-light pb-3 pt-1" style="border-radius: 10px">
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">বিনিয়োগ বা ব্যবসায়িক উদ্দেশ্যে রক্ষিত জমি বা জমির উপর প্রপার্টির মূল্য<br>
                                            (বর্তমান বাজারমূল্য হিসাবে ইনপুট দিন)</h4>
                                            <input type="number" name="landValue" id="landValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateProperty()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalLandValue" id="totalLandValue"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">প্রপার্টি হতে ভাড়াবাবদ প্রাপ্ত সম্পদ (সকল খরচ বাদ দেওয়ার পর)</h4>
                                            <input type="number" name="rentalValue" id="rentalValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateProperty()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalRentalValue" id="totalRentalValue"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center d-inline-block">
                                <hr class="alert-primary">
                                <span class="text-dark" style="font-weight: normal; font-size: 18px"> জমিজমা বা জমির উপর প্রপার্টির সমতুল্য মোট যাকাতের পরিমাণ &nbsp; = &nbsp;</span>
                                <output type="number" name="totalProperty" id="totalProperty" class="text-primary" value="0" style="font-weight: normal; font-size: 20px">0</output>
                                <span class="text-primary" style="font-weight: normal; font-size: 16px"> &nbsp; &#2547; (টাকা)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-info">
                                <h4 class="card-title"> ব্যবসার(বিক্রয়যোগ্য মজুদ) উপরে যাকাত (২.৫%)</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mt-auto mb-auto">
                                        <img class="icon_img" src="{{asset('img/business.png')}}" alt=""
                                             style="border-radius: 150px; border: 2px solid grey; padding: 2px">
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-7 bg-light pb-3 pt-1" style="border-radius: 10px">
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">বিক্রয়যোগ্য মজুদের পরিমাণ</h4>
                                            <input type="number" name="saleableStockValue" id="saleableStockValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateBusiness()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalSaleableStock" id="totalSaleableStock"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">ক্ষতিগ্রস্থ/অব্যবহারযোগ্য/মৃত মজুদের পরিমাণ</h4>
                                            <input type="number" name="deadStockValue" id="deadStockValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateBusiness()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalDeadStock" id="totalDeadStock"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">বিক্রিত মজুদ হতে প্রাপ্ত পাওনার পরিমাণ</h4>
                                            <input type="number" name="creditSalesValue" id="creditSalesValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateBusiness()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalCreditSales" id="totalCreditSales"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">হিসাব হতে বিয়োগ: সাপ্লাইয়ারদের কাছে বাকি টাকার <br>
                                            (মজুদ ক্রয়ের জন্য খরচ করা টাকা)
                                            </h4>
                                            <input type="number" name="payableSuppliersValue" id="payableSuppliersValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateBusiness()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalPayableSuppliers" id="totalPayableSuppliers"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">হিসাব হতে বিয়োগ: অপরিশোধ্য ঋণ (যে ঋণ শোধ করা যাবে না)</h4>
                                            <input type="number" name="badDebtsValue" id="badDebtsValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateBusiness()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalBadDebts" id="totalBadDebts"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center d-inline-block">
                                <hr class="alert-info">
                                <span class="text-dark" style="font-weight: normal; font-size: 18px"> ব্যবসার উপর সমতুল্য মোট যাকাতের পরিমাণ &nbsp; = &nbsp;</span>
                                <output type="number" name="totalBusiness" id="totalBusiness" class="text-info" value="0" style="font-weight: normal; font-size: 20px">0</output>
                                <span class="text-info" style="font-weight: normal; font-size: 16px"> &nbsp; &#2547; (টাকা)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-success">
                                <h4 class="card-title">যৌথভাবে পরিচালিত ফার্মের শেয়ারের উপরে যাকাত (২.৫%)</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mt-auto mb-auto">
                                        <img class="icon_img" src="{{asset('img/partnership_firms.jpg')}}" alt=""
                                             style="border-radius: 150px; border: 2px solid grey; padding: 2px">
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-7 bg-light pb-3 pt-1" style="border-radius: 10px">
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">সর্বশেষ ব্যালেন্স শিট হিসাব অনুসারে ক্যাপিটাল ব্যালেন্স</h4>
                                            <input type="number" name="capitalValue" id="capitalValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateFirmShare()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalCapital" id="totalCapital"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">আজকের দিন পর্যন্ত ফার্মকে দেয়া ঋণ/এডভান্স</h4>
                                            <input type="number" name="advancedLoanValue" id="advancedLoanValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateFirmShare()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalAdvancedLoan" id="totalAdvancedLoan"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">হিসাব হতে বিয়োগ: বিগত এক বছরে উইথড্র</h4>
                                            <input type="number" name="withdrawalValue" id="withdrawalValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateFirmShare()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalWithdrawal" id="totalWithdrawal"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">ব্যালেন্স শিটের সর্বশেষ হিসাব হতে আজকের দিন পর্যন্ত প্রাপ্ত <br>
                                                (আনুমানিক পরিমাণ দিন কারণ বছরের মাঝে প্রকৃত পরিমাণ জানা কষ্টকর)</h4>
                                            <input type="number" name="profitValue" id="profitValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateFirmShare()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalProfit" id="totalProfit"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center d-inline-block">
                                <hr class="alert-success">
                                <span class="text-dark" style="font-weight: normal; font-size: 18px"> যৌথভাবে পরিচালিত ফার্মের শেয়ারের সমতুল্য মোট যাকাতের পরিমাণ &nbsp; = &nbsp;</span>
                                <output type="number" name="totalFirmShare" id="totalFirmShare" class="text-success" value="0" style="font-weight: normal; font-size: 20px">0</output>
                                <span class="text-success" style="font-weight: normal; font-size: 16px"> &nbsp; &#2547; (টাকা)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-danger">
                                <h4 class="card-title">কৃষিকাজ হতে উৎপাদনের উপর যাকাত (১০%, ৭.৫%, ৫%) </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mt-auto mb-auto">
                                        <img class="icon_img" src="{{asset('img/agricultural_produce.jpg')}}" alt=""
                                             style="border-radius: 150px; border: 2px solid grey; padding: 2px">
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-7 bg-light pb-3 pt-1" style="border-radius: 10px">
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">বৃষ্টির পানির সাহায্যে উৎপাদিত শস্য</h4>
                                            <input type="number" name="rainProductValue" id="rainProductValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateAgriculture()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalRainProduct" id="totalRainProduct"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">সম্পুর্ণভাবে কৃত্রিম পদ্ধতির সাহায্যে (পাম্প/ট্যাংক/খাল খনন) উৎপাদিত শস্য</h4>
                                            <input type="number" name="artificialProductValue" id="artificialProductValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateAgriculture()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalArtificialProduct" id="totalArtificialProduct"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                        <hr>
                                        <div>
                                            <h4 class="card-text text-dark title mb-2 mt-2">আংশিকভাবে বৃষ্টি এবং কৃত্রিম উভয় পদ্ধতির সাহায্যে উৎপাদিত শস্য</h4>
                                            <input type="number" name="partialProductValue" id="partialProductValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateAgriculture()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalPartialProduct" id="totalPartialProduct"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer justify-content-center d-inline-block">
                                <hr class="alert-danger">
                                <span class="text-dark" style="font-weight: normal; font-size: 18px"> কৃষিকাজ হতে উৎপাদনের সমতুল্য মোট যাকাতের পরিমাণ &nbsp; = &nbsp;</span>
                                <output type="number" name="totalAgriculture" id="totalAgriculture" class="text-danger" value="0" style="font-weight: normal; font-size: 20px">0</output>
                                <span class="text-danger" style="font-weight: normal; font-size: 16px"> &nbsp; &#2547; (টাকা)</span>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">পশুপালন/পোল্ট্রি/মাছের খামারের উপর যাকাত (২.৫%) </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mt-auto mb-auto col-md-4">
                                        <img class="icon_img" src="{{asset('img/poultry.jpg')}}" alt=""
                                             style="border-radius: 150px; border: 2px solid grey; padding: 2px">
                                    </div>
                                    <div class="col-xl-1 "></div>
                                    <div class="col-xl-7 bg-light pb-3 pt-1" style="border-radius: 10px; margin-bottom: 30px; margin-top: 30px">
                                        <div style="vertical-align: middle;" class="pt-5">
                                            <h4 class="card-text text-dark title mb-3 mt-2">ছয় মাসের অধিক বয়সী পশু এবং পাখির মোট বাজারমূল্য<br>
                                            (সব পশুপাখির সম্মিলিত বাজারমূল্য ইনপুট দিন)</h4>
                                            <input class="mt-3" type="number" name="farmingValue" id="farmingValue"
                                                   placeholder="মোট বাজারমূল্য (টাকায়)" onchange="calculateFarming()">&nbsp;
                                        </div>

{{--                                        <div style="vertical-align: middle" class="pt-5">--}}
{{--                                            <h4 class="card-text text-dark title mb-2 mt-2">--}}
{{--                                                ছয় মাসের অধিক বয়সী পশু এবং পাখির মোট বাজারমূল্য<br>--}}
{{--                                                (সব পশুপাখির সম্মিলিত বাজারমূল্য ইনপুট দিন)--}}
{{--                                            </h4>--}}
{{--                                            <input class="mt-3" type="number" name="gold" id="silverWeight"--}}
{{--                                                   placeholder="মোট রূপার ওজন (গ্রাম)" onchange="calculateTotalSilver()">--}}
{{--                                            &nbsp;--}}
{{--                                            <input class="mt-3" type="number" name="gold" id="silverUnitPrice"--}}
{{--                                                   placeholder="১ গ্রাম রূপার দাম" onchange="calculateTotalSilver()">--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer justify-content-center d-inline-block">
                                <hr class="alert-info">
                                <span class="text-dark" style="font-weight: normal; font-size: 18px"> পশুপালন/পোল্ট্রি/মাছের খামারের সমতুল্য মোট যাকাতের পরিমাণ &nbsp; = &nbsp;</span>
                                <output type="number" name="totalFarming" id="totalFarming" class="text-info" value="0" style="font-weight: normal; font-size: 20px">0</output>
                                <span class="text-info" style="font-weight: normal; font-size: 16px"> &nbsp; &#2547; (টাকা)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-md-11">
                        <div class="card card-nav-tabs text-center">
                            <div class="card-header card-header-rose">
                                <h4 class="card-title">হিসাব হতে বিয়োগ: অর্থনৈতিক দায়বদ্ধতা (ঋণ/ট্যাক্স)</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mt-auto mb-auto">
                                        <img class="icon_img" src="{{asset('img/liabilities.jpg')}}" alt=""
                                             style="border-radius: 150px; border: 2px solid grey; padding: 2px">
                                    </div>
                                    <div class="col-xl-1"></div>
                                    <div class="col-xl-7 bg-light pb-3 pt-1" style="border-radius: 10px">
                                        <div style="vertical-align: middle" class="pt-4 pb-3">
                                            <h4 class="card-text text-dark title mb-2 mt-2">ব্যক্তিগত ঋণ বা বকেয়া (যা প্রদান করা বাকি)</h4>
                                            <input type="number" name="personalPaybackValue" id="personalPaybackValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateLiabilities()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalPersonalPayback" id="totalPersonalPayback"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>
                                        </div>
                                        <hr>
                                        <div style="vertical-align: middle" class="pt-2 pb-2">
                                            <h4 class="card-text text-dark title mb-2 mt-2">আয় কর/সম্পদের কর (যা প্রদান করা বাকি)</h4>
                                            <input type="number" name="taxPayableValue" id="taxPayableValue"
                                                   placeholder="মোট পরিমাণ (টাকায়)" onchange="calculateLiabilities()">&nbsp;
                                            <span class="text-success" style="font-weight: bold">=</span>
                                            <output type="number" name="totalTaxPayable" id="totalTaxPayable"
                                                    class="text-success mt-3"
                                                    style="font-size: 16px">0
                                            </output>
                                            <span class="text-success" >&#2547; (টাকা)</span>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer justify-content-center d-inline-block">
                                <hr class="alert-danger">
                                <span class="text-dark" style="font-weight: normal; font-size: 18px"> হিসাব হতে বিয়োগ: অর্থনৈতিক দায়বদ্ধতার (ঋণ/ট্যাক্স) পরিমাণ &nbsp; = &nbsp;</span>
                                <output type="number" name="totalLiabilities" id="totalLiabilities" class="text-rose" value="0" style="font-weight: normal; font-size: 20px">0</output>
                                <span class="text-rose" style="font-weight: normal; font-size: 16px"> &nbsp; &#2547; (টাকা)</span>
                            </div>
                        </div>
                    </div>


{{--                    <div class="col-xl-11 col-lg-11 col-md-11">--}}
{{--                        <div class="alert alert-danger text-center mt-2">--}}
{{--                            <div class="container">--}}
{{--                                <span style="font-size: 20px">আপনার মোট যাকাতের পরিমাণঃ </span> &nbsp;--}}
{{--                                <output type="number" name="totalZakat" id="totalZakat" value="0" style="font-size: 20px">0</output>--}}
{{--                                <span style="font-size: 20px"> &nbsp; &#2547; (টাকা)</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

            </div>
        </div>
        <!-- help_area_end -->
    </div>
@endsection
