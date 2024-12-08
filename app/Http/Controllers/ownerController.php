<?php

namespace App\Http\Controllers;

use App\Models\owner;
use App\Models\apartment;
use Illuminate\Http\Request;

class ownerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('owner1', [
            'Owners' => owner::paginate($perpage)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owner_create', [
            'Apartment' => apartment::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Name_owner' => 'required|unique:Owners|max:255',
            'Ownership_interest' => 'required|integer',
            'Password' => 'required|integer',
            'apartment_id' => 'integer'
        ]);
        $owner = new owner($validated);
        $owner->save();
        return redirect('/owner')->withErrors(['success' =>
            'Собственники успешно добавлены']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('owner2', [
            'owner' => owner::all()->where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('owner_edit', [
            'owner' => owner::all()->where('id', $id)->first(),
            'Apartment' => apartment::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'Name_owner' => 'required|max:255',
            'Ownership_interest' => 'required|integer',
            'Password' => 'integer',
            'apartment_id' => 'integer'
        ]);
        $owner = owner::all()->where('id', $id)->first();
        $owner->Name_owner = $validated['Name_owner'];
        $owner->Ownership_interest = $validated['Ownership_interest'];
        $owner->Password = $validated['Password'];
        $owner->apartment_id = $validated['apartment_id'];
        $owner->save();
        return redirect('/owner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        owner::destroy($id);
        return redirect('/owner');
    }
}
