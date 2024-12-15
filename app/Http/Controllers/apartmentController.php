<?php

namespace App\Http\Controllers;

use App\Models\apartment;
use App\Models\dom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class apartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('apartment1', [
            'Apartment' => apartment::paginate($perpage)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apartment_create', [
            'Dom' => dom::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Apartment' => 'required|unique:Apartment|max:255',
            'Numbers_owners' => 'required|integer',
            'Personal_account' => 'required|integer',
            'dom_id' => 'integer'
        ]);
        $apartment = new apartment($validated);
        $apartment->save();
        return redirect('/apartment')->withErrors(['success' =>
        'Апартаменты успешно добавлены']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('apartment2', [
            'apartment' => apartment::all()->where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('apartment_edit', [
            'apartment' => apartment::all()->where('id', $id)->first(),
            'Dom' => dom::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'Apartment' => 'required|max:255',
            'Numbers_owners' => 'required|integer',
            'dom_id' => 'integer'
        ]);
        $apartment = apartment::all()->where('id', $id)->first();
        $apartment->Apartment = $validated['Apartment'];
        $apartment->Numbers_owners = $validated['Numbers_owners'];
        $apartment->dom_id = $validated['dom_id'];
        $apartment->save();
        return redirect('/apartment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (! Gate::allows('destroy-apartment', apartment::all()->where('id', $id)->first())) {
            return redirect('/error')->with('message',
            'У Вас нет разрешения на удаление жилого помещения' . $id);
        }
        apartment::destroy($id);
        return redirect('/apartment');
    }
}
