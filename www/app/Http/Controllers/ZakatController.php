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

class ZakatController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('ShomonnoiBD - Zakat Calculator');
        SEOMeta::setDescription('Calculate your Zakat value from the resources you have which are eligible for Zakat ');
        SEOMeta::setCanonical('http://shomonnoibd.com/zakat');

        OpenGraph::setDescription('Calculate your Zakat value from the resources you have which are eligible for Zakat ');
        OpenGraph::setTitle('ShomonnoiBD - Zakat Calculator');
        OpenGraph::setUrl('http://shomonnoibd.com/zakat');
        OpenGraph::addProperty('type', 'Zakat Calculator');
        OpenGraph::addImage('http://shomonnoibd.com/assets/img/bg_zakat.png');

        Twitter::setTitle('ShomonnoiBD - Zakat Calculator');
        Twitter::setSite('@ShomonnoiBD');

        JsonLd::setTitle('ShomonnoiBD - Zakat Calculator');
        JsonLd::setDescription('Calculate your Zakat value from the resources you have which are eligible for Zakat ');
        JsonLd::addImage('http://shomonnoibd.com/assets/img/bg_zakat.png');


        $divisions = Division::all();
        $blog = Blog::where('type', "news")
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
        return view('zakat')
            ->with('divisions', $divisions)
            ->with('blog', $blog)
            ->with('analyticsData', $visitors);
    }
}
