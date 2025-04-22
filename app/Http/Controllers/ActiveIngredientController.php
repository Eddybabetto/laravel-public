<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActiveIngredientRequest;
use App\Http\Requests\UpdateActiveIngredientRequest;
use App\Models\ActiveIngredient;
use Inertia\Inertia;

class ActiveIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_ingredient_data = ActiveIngredient::all()->load("drugs");
        return Inertia::render("ActiveIngredients", ["data" => $all_ingredient_data]);
    }
    public function get_drugs_by_ingredient($id)
    {

        $data = ActiveIngredient::find($id)->drugs;
        return Inertia::render("Drugs", ["data" => $data]);

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
    public function store(StoreActiveIngredientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = ActiveIngredient::find($id)->load("drugs");
        return Inertia::render("ActiveIngredient", ["data" => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActiveIngredient $activeIngredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActiveIngredientRequest $request, ActiveIngredient $activeIngredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActiveIngredient $activeIngredient)
    {
        //
    }
}
