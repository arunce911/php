<?php

namespace App\Http\Controllers;

use App\Models\store;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return view('Store.index',['stores'=>store::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(store $store): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(store $store): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, store $store): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(store $store): RedirectResponse
    {
        //
    }
}
