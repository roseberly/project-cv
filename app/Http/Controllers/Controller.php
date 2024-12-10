<?php

namespace App\Http\Controllers;


use App\Models\CV;
use Illuminate\Http\Request;

class CVController extends Controller {
    public function index() {
        $cvs = CV::all();
        return view('cvs.index', compact('cvs'));
    }

    public function create() {
        return view('cvs.create');
    }

    public function store(Request $request) {
        $cv = new CV;
        $cv->user_id = auth()->id();
        $cv->name = $request->name;
        $cv->email = $request->email;
        $cv->profile = $request->profile;
        $cv->education = $request->education;
        $cv->experience = $request->experience;
        $cv->skills = $request->skills;
        $cv->save();

        return redirect()->route('cvs.index')->with('success', 'CV created successfully.');
    }

    public function show(CV $cv) {
        return view('cvs.show', compact('cv'));
    }

    public function edit(CV $cv) {
        return view('cvs.edit', compact('cv'));
    }

    public function update(Request $request, CV $cv) {
        $cv->update($request->all());
        return redirect()->route('cvs.index')->with('success', 'CV updated successfully.');
    }

    public function destroy(CV $cv) {
        $cv->delete();
        return redirect()->route('cvs.index')->with('success', 'CV deleted successfully.');
}
}

abstract class Controller
{
    //
}
