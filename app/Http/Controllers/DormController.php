<?php

namespace App\Http\Controllers;

use App\Models\Dorm;
use App\Http\Requests\StoreDormRequest;
use App\Http\Requests\UpdateDormRequest;

class DormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreDormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dorm $dorm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dorm $dorm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDormRequest $request, Dorm $dorm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dorm $dorm)
    {
        //
    }
}
