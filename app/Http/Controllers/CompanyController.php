<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployerStoreRequest;
use App\Http\Requests\EmployerUpdateRequest;
use App\Models\Employer;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Subscription;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Employer::find(auth()->user()->employer_id);

        if (empty($company)) {
            return to_route('companies.create');
        }

        return view('companies.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployerStoreRequest $request)
    {

        $imageName = time() . '.' . $request->company_logo->extension();
        $request->company_logo->storeAs('companies-logos', $imageName, 'public');

        $company = Employer::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'address' => $request->address,
            'short_description' => $request->short_description,
            'video_url' => $request->video_url,
            'website_url' => $request->website_url,
            'company_logo' => 'companies-logos/' . $imageName,
            'project_from' => $request->project_from,
        ]);

        $user = User::find(auth()->id());
        $user->update([
            'employer_id' => $company->id
        ]);

        return to_route('companies.index');
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $company)
    {


        $user = User::find(auth()->id());

        if (auth()->user()->employer_id != $company->id) {
            abort(403);
        }
        $subscription = $user->subscriptions()->active()->latest()->first();

        $plan = Plan::Where('stripe_plan', $subscription->stripe_price)->first();

        return view('companies.edit', compact('company', 'plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employer $company)
    {


        if ($request->has('company_logo')) {
            $imageName = time() . '.' . $request->company_logo->extension();
            $request->company_logo->storeAs('companies-logos', $imageName, 'public');
            $imageName = 'companies-logos/' . $imageName;
        } else {
            $imageName = $company->company_logo;
        }



        $company->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'address' => $request->address,
            'short_description' => $request->short_description,
            'video_url' => $request->video_url,
            'website_url' => $request->website_url,
            'company_logo' =>  $imageName,
            'project_from' => $request->project_from,
        ]);

        return to_route('companies.index');
    }
}