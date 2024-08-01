<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // get
    {
       return view('Home.Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // get
    {
        return view('Home.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // post 
    {
       dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // get
    {
        return view('Home.Show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) // get
    {
        return view('Home.Edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) // put
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) // delete
    {
        //
    }
}
