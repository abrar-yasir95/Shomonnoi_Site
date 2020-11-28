<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Division;
use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;


use SEOMeta;
use OpenGraph;
use JsonLd;
use Twitter;


class DivisionController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('ShomonnoiBD - Homepage');
        SEOMeta::setDescription('The world has not seen such an
        alarming situation due to the Corona outbreak after World War II.
        Nearly all the countries have been affected by this devastating virus and Bangladesh is also no exception. It\'s high time we stand together to fight against this invisible enemy. ShomonnoiBD is an initiative to accumulate donors, volunteers, NGOs, private and government stakeholders. We wish to reach every corner of our country connecting individuals and voluntary organizations fighting there against this outbreak. We hope to provide them with the best possible help through our information system. Join this fight against the COVID-19 pandemic being a part of shomonnoibd.com.');
        SEOMeta::setCanonical('http://shomonnoibd.com/');

        OpenGraph::setDescription('The world has not seen such an alarming situation due to the Corona outbreak after World War II.
        Nearly all the countries have been affected by this devastating virus and Bangladesh is also no exception. It\'s high time we stand together to fight against this invisible enemy.
        ShomonnoiBD is an initiative to accumulate donors, volunteers, NGOs, private and government stakeholders.
        We wish to reach every corner of our country connecting individuals and voluntary organizations fighting there against this outbreak. We hope to provide them with the best possible help through our information system.
        Join this fight against the COVID-19 pandemic being a part of shomonnoibd.com.');
        OpenGraph::setTitle('ShomonnoiBD - Homepage');
        OpenGraph::setUrl('http://shomonnoibd.com/');
        OpenGraph::addProperty('type', 'Charity');

        Twitter::setTitle('ShomonnoiBD - Homepage');
        Twitter::setSite('@ShomonnoiBD');

        JsonLd::setTitle('ShomonnoiBD - Homepage');
        JsonLd::setDescription('The world has not seen such an alarming situation due to the Corona outbreak after World War II.
        Nearly all the countries have been affected by this devastating virus and Bangladesh is also no exception. It\'s high time we stand together to fight against this invisible enemy.
        ShomonnoiBD is an initiative to accumulate donors, volunteers, NGOs, private and government stakeholders.
        We wish to reach every corner of our country connecting individuals and voluntary organizations fighting there against this outbreak. We hope to provide them with the best possible help through our information system.
        Join this fight against the COVID-19 pandemic being a part of shomonnoibd.com.');
        JsonLd::addImage('http://shomonnoibd.com/img/shomonnoi-logo.png');


        $divisions = Division::all();
        $blog = Blog::where('type', "news")
            ->latest('created_at')
            ->limit(3)
            ->get();
        $research = Blog::where('type', "research")
            ->latest('created_at')
            ->limit(3)
            ->get();
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(12));
        $visitors = 0;
        foreach ($analyticsData as $analytics){
//            $visitors = max($visitors, $analytics['visitors']);
            $visitors += $analytics['pageViews'];
        }

//        dd(($visitors));
        return view('welcome')
            ->with('divisions', $divisions)
            ->with('blog', $blog)
            ->with('research', $research)
            ->with('analyticsData', $visitors);
    }

    public function getAllDivisions()
    {
        return Division::all();
    }

}
