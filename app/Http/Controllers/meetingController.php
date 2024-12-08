<?php

namespace App\Http\Controllers;

use App\Models\meeting;
use App\Models\dom;
use Illuminate\Http\Request;

class meetingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $perpage = $request->perpage ?? 2;
        return view('meeting1', [
            'Meeting' => meeting::paginate($perpage)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meeting_create', [
            'Dom' => dom::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Date' => 'required|unique:Meeting',
            'Initiator' => 'required|max:255',
            'dom_id' => 'integer'
        ]);
        $meeting = new meeting($validated);
        $meeting->save();
        return redirect('/meeting')->withErrors(['success' =>
            'Собрание успешно добавлено']);
    }

    public function show(string $id)
    {
        return view('meeting2', [
            'meeting' => meeting::all()->where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        return view('meeting_edit', [
            'meeting' => meeting::all()->where('id', $id)->first(),
            'Dom' => dom::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'Date' => 'required|max:255',
            'Initiator' => 'required|max:255',
            'dom_id' => 'integer'
        ]);
        $meeting = meeting::all()->where('id', $id)->first();
        $meeting->Date = $validated['Date'];
        $meeting->Initiator = $validated['Initiator'];
        $meeting->dom_id = $validated['dom_id'];
        $meeting->save();
        return redirect('/meeting');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        meeting::destroy($id);
        return redirect('/meeting');
    }
}
