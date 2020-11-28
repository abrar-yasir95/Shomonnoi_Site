<?php

namespace App\Http\Controllers\Admin;

use App\Division;
use App\Http\Controllers\Controller;
use App\Organization;
use App\Payment;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::latest('created_at')
                        ->paginate(10);
        $divisions = Division::all();
        $payments = null;
        $organization = new Organization();
        $payment = new Payment();
        foreach ($organizations as $organization) {
            if ($payments != null)
                $payments = $payments->merge(Payment::where('organization_id', $organization->id)->get());
            else {
                $payments = Payment::where('organization_id', $organization->id)->get();
            }
        }

        return view('admin.organizations')
            ->with('organizations', $organizations)
            ->with('divisions', $divisions)
            ->with('payments', $payments)
            ->with('organization', $organization)
            ->with('payment', $payment)
            ->with('title', 'All Organizations');
    }

    public function validatedData(){
        return request()->validate([
            'name' => 'required',
            'area' => 'required',
            'upazila' => 'required',
            'division_id' => 'required',
            'activity' => 'required',
            'phone_number' => 'nullable|max:12',
            'registered' => 'nullable',
            'needed_fund' => 'nullable',
            'credited_fund' => 'nullable',
            'email' => 'nullable|email',
            'website' => 'nullable',
            'fb_link' => 'nullable',
        ]);
    }

    public function validatedPayment(){
        return request()->validate([
            'organization_id' => 'nullable',
            'bkash' => 'nullable',
            'rocket' => 'nullable',
            'nagad' => 'nullable',
            'online_gateway' => 'nullable',
        ]);
    }

    public function store(Request $request)
    {
        $organization = Organization::create($this->validatedData());
        $organization->phone_number = str_replace('-', '', $organization->phone_number);

        $organization->update($this->validatedData());

        $request->request->add(['organization_id' => $organization->id]);

        $payment = Payment::create($this->validatedPayment());

        if(!is_null($payment->bkash))
            $payment->bkash = str_replace('-', '', $payment->bkash);
        if(!is_null($payment->rocket))
            $payment->rocket = str_replace('-', '', $payment->rocket);
        if(!is_null($payment->nagad))
            $payment->nagad = str_replace('-', '', $payment->nagad);

        $payment->update($this->validatedPayment());

//        dd($organization);
        return redirect('/admin/organization-edit')
            ->with('status', 'New Organization Added');
    }

    public function edit($id)
    {
        $organization = Organization::findOrFail($id);

        $organization->phone_number = str_replace('-', '', $organization->phone_number);
        $payment = Payment::where('organization_id', $id)->get();
        $divisions = Division::all();
        return view('admin.organization.edit')
            ->with('organization', $organization)
            ->with('divisions', $divisions)
            ->with('payment', $payment[0]);

//        dd($organization);
//        return redirect('/admin/organization-edit')->with('status', 'New Organization Added');
    }

    public function update($id)
    {
        $organization = Organization::find($id);
        $organization->phone_number = str_replace('-', '', $organization->phone_number);
        $organization->update($this->validatedData());

        $payment = Payment::where('organization_id', $id)->first();

        $payment->update($this->validatedPayment());
//        dd($payment);
        if(!is_null($payment->bkash))
            $payment->bkash = str_replace('-', '', $payment->bkash);
        if(!is_null($payment->rocket))
            $payment->rocket = str_replace('-', '', $payment->rocket);
        if(!is_null($payment->nagad))
            $payment->nagad = str_replace('-', '', $payment->nagad);

        $payment->update($this->validatedPayment());

        return redirect('/admin/organization-edit')
            ->with('status', 'Organization is Updated');
    }


    public function delete($id)
    {
//        dd($id);
        $organization = Organization::findOrFail($id);
        $organization->delete();

        $payment = Payment::where('organization_id', $id)->first();
        $payment->delete();

        return redirect('/admin/organization-edit')
            ->with('status', 'Data is Deleted');

    }
}
