<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployerStoreRequest;
use App\Http\Requests\EmployerUpdateRequest;
use App\Models\Employer;
use Illuminate\Http\Request;

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

        Employer::create([
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

        return to_route('companies.index');
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $company)
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employer $company)
    {


        if ($request->has('company_logo')) {
            $imageName = time() . '.' . $request->company_logo->extension();
            $request->company_logo->storeAs('companies-logos', $imageName, 'public');
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
            'company_logo' => 'companies-logos/' . $imageName,
            'project_from' => $request->project_from,
        ]);

        return to_route('companies.index');
    }
}
