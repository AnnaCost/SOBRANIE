<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\meeting;
use Illuminate\Http\Request;

class questionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('question1', [
            'Questions' => question::paginate($perpage)->withQueryString(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('question_create', [
            'Meeting' => meeting::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Questions' => 'required|max:255',
            'meeting_id' => 'integer'
        ]);
        $question = new question($validated);
        $question->save();
        return redirect('/question')->withErrors(['success' =>
            'Вопросы успешно добавлены']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('question2', [
            'question' => question::all()->where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('question_edit', [
            'question' => question::all()->where('id', $id)->first(),
            'Meeting' => meeting::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'Questions' => 'required|max:255',
            'meeting_id' => 'integer'
        ]);
        $question = question::all()->where('id', $id)->first();
        $question->Questions = $validated['Questions'];
        $question->meeting_id = $validated['meeting_id'];
        $question->save();
        return redirect('/question');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        question::destroy($id);
        return redirect('/question');
    }
}
