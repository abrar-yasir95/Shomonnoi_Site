<?php

namespace App\Http\Controllers;

use App\Division;
use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;

use SEOMeta;
use OpenGraph;
use JsonLd;
use Twitter;

class PolicyController extends Controller
{
    public function index()
    {
        $description = "This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decides to use our Service, the shomonnoibd.com website.
If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.
The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at http://www.shomonnoibd.com/, unless otherwise defined in this Privacy Policy. Our Privacy Policy was created with the help of the Privacy Policy Template and the Disclaimer Generator.
";

        SEOMeta::setTitle("Privacy Policy");
        SEOMeta::setDescription($description);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle("Privacy Policy");
        OpenGraph::setUrl('http://shomonnoibd.com/policy');
        OpenGraph::addProperty('type', 'policy');
        OpenGraph::addProperty('locale', 'en-US');
        OpenGraph::addImage('http://shomonnoibd.com/img/shomonnoi-logo.png');

        Twitter::setTitle("Privacy Policy");
        Twitter::setSite('@ShomonnoiBD');

        JsonLd::setTitle("Privacy Policy");
        JsonLd::setDescription($description);
        JsonLd::setType('policy');
        JsonLd::addImage('http://shomonnoibd.com/img/shomonnoi-logo.png');


        $divisions = Division::all();
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        $visitors = 0;
        foreach ($analyticsData as $analytics){
//            $visitors = max($visitors, $analytics['visitors']);
            $visitors += $analytics['pageViews'];
        }
        return view('policy')
            ->with('divisions', $divisions)
            ->with('analyticsData', $visitors);
    }
}
