<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Inertia\Inertia;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_companies_data = Company::all();
        return Inertia::render("Companies", ["data" => $all_companies_data]);
        //return Inertia::render('Companies', ["data"=>$all_companies_data]);    
    }

    public function get_drugs_by_company_id($id)
    {

        $drugs = Company::find($id)->drugs;
        return Inertia::render("Drugs", ["data" => $drugs]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Company::find($id)->load("drugs");
        return Inertia::render("Company", ["data" => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
