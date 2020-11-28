<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Division;
use App\Organization;
use App\Payment;
use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;
use SEOMeta;
use OpenGraph;
use JsonLd;
use Twitter;

class BlogController extends Controller
{
    public function index()
    {
        $organizations = Organization::all();
        $divisions = Division::all();
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        $visitors = 0;
        foreach ($analyticsData as $analytics){
//            $visitors = max($visitors, $analytics['visitors']);
            $visitors += $analytics['pageViews'];
        }
        $payments = null;
//        $blog = Blog::where('type', "news")
//            ->latest('created_at')
//            ->get();
        $blog = Blog::where('type', "news")
            ->latest('created_at')
        ->paginate(5)

        ;

        foreach ($organizations as $organization)
            $payments = Payment::where('organization_id', $organization->id)->get();

        return view('news')
            ->with('organizations', $organizations)
            ->with('divisions', $divisions)
            ->with('payments', $payments)
            ->with('blog', $blog)
            ->with('title', 'Corona Related News')
            ->with('subtitle', 'Here you can find all types of relevant news regarding corona outbreak')
            ->with('analyticsData', $visitors);
    }

    public function recentResearch()
    {
        $organizations = Organization::all();
        $divisions = Division::all();
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        $visitors = 0;
        foreach ($analyticsData as $analytics){
//            $visitors = max($visitors, $analytics['visitors']);
            $visitors += $analytics['pageViews'];
        }
        $payments = null;
        $blog = Blog::where('type', "research")
            ->latest('created_at')
            ->paginate(5)
            ;
        foreach ($organizations as $organization)
            $payments = Payment::where('organization_id', $organization->id)->get();

        return view('news')
            ->with('organizations', $organizations)
            ->with('divisions', $divisions)
            ->with('payments', $payments)
            ->with('blog', $blog)
            ->with('title', 'Recent Research Updates')
            ->with('subtitle', 'Here you can find all types of relevant research regarding corona outbreak')
            ->with('analyticsData', $visitors);
    }

    public function show($blog_id)
    {
        $divisions = Division::all();
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        $visitors = 0;
        foreach ($analyticsData as $analytics){
//            $visitors = max($visitors, $analytics['visitors']);
            $visitors += $analytics['pageViews'];
        }
        $single_blog = Blog::findOrFail($blog_id);

        SEOMeta::setTitle($single_blog->title);
        SEOMeta::setDescription($single_blog->description);
        SEOMeta::addMeta('article:published_time', $single_blog->created_at->toW3CString(), 'property');

        OpenGraph::setDescription($single_blog->description);
        OpenGraph::setTitle($single_blog->title);
        OpenGraph::setUrl('http://shomonnoibd.com/'.$single_blog->type.'/'.$single_blog->id);
        OpenGraph::addProperty('type', $single_blog->type);
        OpenGraph::addProperty('locale', 'en-US');
        OpenGraph::addImage($single_blog->image);

        Twitter::setTitle($single_blog->title);
        Twitter::setSite('@ShomonnoiBD');

        JsonLd::setTitle($single_blog->title);
        JsonLd::setDescription($single_blog->description);
        JsonLd::setType($single_blog->type);
        JsonLd::addImage($single_blog->image);


        return view('single_news')
            ->with('divisions', $divisions)
            ->with('single_blog', $single_blog)
            ->with('title', $single_blog->title)
            ->with('analyticsData', $visitors);
    }
}
