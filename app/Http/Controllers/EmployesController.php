<?php

namespace App\Http\Controllers;

use App\Models\employes;
use App\Http\Requests\StoreemployesRequest;
use App\Http\Requests\UpdateemployesRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Gate;

class EmployesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index','show']);
        $this->authorizeResource(employes::class, 'order');
    }
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
    public function store(StoreemployesRequest $request)

    {
       // Gate::authorize('employes:view');
        $employe = employes::create($request->toArray());
        return $employe;
    }

    /**
     * Display the specified resource.
     */
    public function show(employes $employes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employes $employes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateemployesRequest $request, employes $employes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employes $employes)
    {
        //
    }
}
