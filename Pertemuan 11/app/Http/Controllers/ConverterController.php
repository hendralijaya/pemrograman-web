<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConverterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Currency Converter';
        $data['currencies'] = [
            'IDR' => 'Indonesia Rupiah',
            'USD' => 'United States Dollar',
            'EUR' => 'Euro Member Countries',
            'GBP' => 'United Kingdom Pound',
            // Add more currencies as needed
        ];

        // set session for users
        $user = Auth::user();

        // set success to session
        session()->flash('success', "Welcome back, you access converter view {$user->name}!");

        // set tracking to cookie for 1 minute
        cookie('converter view', true, 1);

        return view('converter', $data);
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
        //
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
