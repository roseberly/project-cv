<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CVController extends Controller

{

public function download( $cv) {
    $pdf = Pdf::loadView('cvs.pdf', compact('cv'));
    return $pdf->download('cv.pdf');
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
    public function store(Request $request)
    {
        $validated = $request->validate([ 
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255', 
            'profile' => 'required', 
            'education' => 'required', 
            'experience' => 'required',
            'skills' => 'required',
    ]);

    return redirect()->route('cvs.index')->with('success', 'CV created successfully.');
    
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
    public function update(Request $request, $cv)
    {
        $validated = $request->validate([ 
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'profile' => 'required',
            'education' => 'required',
                'experience' => 'required',
                'skills' => 'required',
                ]);
                $cv->update($validated); return redirect()->route('cvs.index')->with('success', 'CV updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

}

} 