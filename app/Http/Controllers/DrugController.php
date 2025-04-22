<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDrugRequest;
use App\Http\Requests\UpdateDrugRequest;
use App\Models\Drug;
use Inertia\Inertia;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_drugs_data = Drug::all()->load("company")->load("active_ingredient");
        return Inertia::render("Drugs", ["data" => $all_drugs_data]);
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
    public function store(StoreDrugRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $all_drug_data = Drug::find($id)->load("company")->load("active_ingredient");
        return Inertia::render("Drug", ["data" => $all_drug_data]);
    }
    public function get_company_by_drug(string $id)
    {
        $data = Drug::find($id)->company;
        return Inertia::render("Company", ["data" => $data]);
    }
    public function get_ingredient_by_drug(string $id)
    {
        $data = Drug::find($id)->active_ingredient;
        return Inertia::render("ActiveIngredient", ["data" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drug $drug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDrugRequest $request, Drug $drug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drug $drug)
    {
        //
    }
}
