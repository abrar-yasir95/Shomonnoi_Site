<?php

namespace App\Http\Controllers;

use App\Division;
use App\Organization;
use App\Payment;
use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;

class OrganizationController extends Controller
{
    public function index()
    {
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        $visitors = 0;
        foreach ($analyticsData as $analytics){
//            $visitors = max($visitors, $analytics['visitors']);
            $visitors += $analytics['pageViews'];
        }
//        $organizations = Organization::all();
        $organizations = Organization::paginate(12);
//            ->orderBy(Organization::raw('RAND()'));
        $divisions = Division::all();
        $payments = null;
        foreach ($organizations as $organization) {
            if ($payments != null)
                $payments = $payments->merge(Payment::where('organization_id', $organization->id)->get());
            else {
                $payments = Payment::where('organization_id', $organization->id)->get();
            }
        }

        return view('organizations')
            ->with('organizations', $organizations)
            ->with('divisions', $divisions)
            ->with('payments', $payments)
            ->with('title', 'All Organizations')
            ->with('subtitle', 'They are Waiting for your help, Make a Donation
                                to involve with humanitarian work.')
            ->with('analyticsData', $visitors);
    }

    public function show($division_name)
    {
        $divisions = Division::all();
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        $visitors = 0;
        foreach ($analyticsData as $analytics){
//            $visitors = max($visitors, $analytics['visitors']);
            $visitors += $analytics['pageViews'];
        }
        $division_id = 0;
        foreach ($divisions as $division) {
            if ($division->name == $division_name) {
                $division_id = $division->id;
                break;
            }
        }
        $organizations = Organization::where('division_id', $division_id)->get();

        $payments = null;
        foreach ($organizations as $organization)
            if ($payments != null)
                $payments = $payments->merge(Payment::where('organization_id', $organization->id)->get());
            else {
                $payments = Payment::where('organization_id', $organization->id)->get();
            }
        return view('organizations')
            ->with('organizations', $organizations)
            ->with('divisions', $divisions)
            ->with('payments', $payments)
            ->with('title', 'Organizations in ' . $division_name)
            ->with('subtitle', 'They are Waiting for your help, Make a Donation
                                to involve with humanitarian work.')
            ->with('analyticsData', $visitors);
    }

    public function emergency($emergency_type)
    {
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        $visitors = 0;
        foreach ($analyticsData as $analytics){
//            $visitors = max($visitors, $analytics['visitors']);
            $visitors += $analytics['pageViews'];
        }
        if ($emergency_type == 'ambulance' || $emergency_type == 'grave') {
            $organizations = Organization::where('activity', ucwords($emergency_type))->get();
        } else {
            $organizations = Organization::where('activity', 'LIKE', '%' . ucwords($emergency_type) . '%')->get();
            if ($emergency_type != 'all') {
                $all = Organization::where('activity', 'LIKE', '%All%')->get();
                $organizations = $all->merge($organizations);
            }
        }
        $payments = null;
        foreach ($organizations as $organization) {
            if ($payments != null)
                $payments = $payments->merge(Payment::where('organization_id', $organization->id)->get());
            else {
                $payments = Payment::where('organization_id', $organization->id)->get();
            }
        }

        $divisions = Division::all();

        return view('organizations')
            ->with('organizations', $organizations)
            ->with('divisions', $divisions)
            ->with('payments', $payments)
            ->with('title', 'Emergency ' . ucwords($emergency_type) . ' Organizations')
            ->with('subtitle', 'Don\'t hesitate to take help from these organizations.' )
            ->with('analyticsData', $visitors);
    }

    public function emergencyAll()
    {
//        $organizations = Organization::where('activity', 'LIKE', '%All%')->get();
//        $organizations = Organization::all();
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        $visitors = 0;
        foreach ($analyticsData as $analytics){
//            $visitors = max($visitors, $analytics['visitors']);
            $visitors += $analytics['pageViews'];
        }
        $organizations = Organization::paginate(12);
        $divisions = Division::all();
        $payments = null;
        foreach ($organizations as $organization)
            if ($payments != null)
                $payments = $payments->merge(Payment::where('organization_id', $organization->id)->get());
            else {
                $payments = Payment::where('organization_id', $organization->id)->get();
            }
        return view('organizations')
            ->with('organizations', $organizations)
            ->with('divisions', $divisions)
            ->with('payments', $payments)
            ->with('title', 'All Emergency Organizations')
            ->with('subtitle', 'Don\'t hesitate to take help from these organizations.' )
            ->with('analyticsData', $visitors);
    }
}
