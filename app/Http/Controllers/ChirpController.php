<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\RedirectResponse; // import class is responsible for generating HTTP redirect responses. Redirect responses are used to navigate users to a different URL.
use Illuminate\Foundation\Exceptions\RegisterErrorViewPaths;
use Illuminate\Http\Request;
use Illuminate\Http\Response; // import statement that allows you to access the Response class within your Laravel application without needing to use the fully qualified namespace each time I wanna reference it.
use  Illuminate\View\View; // import statement that is used to manage and render views.

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // redirect the user to the chirps.index view
        return view('chirps.index');
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
     public function store(Request $request): RedirectResponse
    {
        // validate the request and ensure the user provides messages with max 255 chars.
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
        // creating a record that will belong to the authenticated user
        $request->user()->chirps()->create($validated);
        //return the reditect response to send users back to the chirps.index route.
        return redirect(route('chirps.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
    {
        //
    }
}
