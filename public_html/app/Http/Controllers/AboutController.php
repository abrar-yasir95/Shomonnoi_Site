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

class AboutController extends Controller
{
    public function index()
    {

        $description = "This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decides to use our Service, the shomonnoibd.com website.
If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.
The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at http://www.shomonnoibd.com/, unless otherwise defined in this Privacy Policy. Our Privacy Policy was created with the help of the Privacy Policy Template and the Disclaimer Generator.
";

        SEOMeta::setTitle("About ShomonnoiBD");
        SEOMeta::setDescription($description);

        OpenGraph::setDescription($description);
        OpenGraph::setTitle("About ShomonnoiBD");
        OpenGraph::setUrl('http://shomonnoibd.com/about');
        OpenGraph::addProperty('type', 'about');
        OpenGraph::addProperty('locale', 'en-US');
        OpenGraph::addImage('http://shomonnoibd.com/img/bg_team.png');

        Twitter::setTitle("About ShomonnoiBD");
        Twitter::setSite('@ShomonnoiBD');

        JsonLd::setTitle("About ShomonnoiBD");
        JsonLd::setDescription($description);
        JsonLd::setType('about');
        JsonLd::addImage('http://shomonnoibd.com/img/bg_team.png');


        $divisions = Division::all();
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(12));
        $visitors = 0;
        foreach ($analyticsData as $analytics){
//            $visitors = max($visitors, $analytics['visitors']);
            $visitors += $analytics['pageViews'];
        }
        return view('about')
            ->with('divisions', $divisions)
            ->with('analyticsData', $visitors);
    }
}
