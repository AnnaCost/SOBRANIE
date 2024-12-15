<?php

namespace App\Http\Controllers;

use App\Models\apartment;
use App\Models\voting;
use App\Models\question;
use App\Models\owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class votingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('voting1', [
            'voting' => voting::with('owner','question')->paginate($perpage)->withQueryString(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('voting_create', [
            'Questions' => question::all(),
            'Owners' => owner::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Result' => 'required|integer',
            'name_owner_id' => 'integer',
            'questions_id' => 'integer'
        ]);
        $voting = new voting($validated);
        $voting->save();
        return redirect('/voting')->withErrors(['success' =>
            'Результаты голосования успешно добавлены']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('voting2', [
            'voting' => voting::all()->where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (! Gate::allows('edit-voting', voting::all()->where('id', $id)->first())) {
            return redirect('/error')->with('message',
                'У Вас нет разрешения на редактирование результатов голосования' . $id);
        }
        return view('voting_edit', [
            'voting' => voting::all()->where('id', $id)->first(),
            'Owners' => owner::all(),
            'Questions' => question::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'Result' => 'required|max:255',
            'name_owner_id' => 'integer',
            'questions_id' => 'integer'
        ]);
        $voting = voting::all()->where('id', $id)->first();
        $voting->Result = $validated['Result'];
        $voting->name_owner_id = $validated['name_owner_id'];
        $voting->questions_id = $validated['questions_id'];
        $voting->save();
        return redirect('/voting');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (! Gate::allows('destroy-voting', voting::all()->where('id', $id)->first())) {
            return redirect('/error')->with('message',
                'У Вас нет разрешения на удаление результата голосования' . $id);
        }
        voting::destroy($id);
        return redirect('/voting');
    }

}
