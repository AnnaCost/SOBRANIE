<?php

namespace App\Http\Controllers;

use App\Models\meeting;
use Illuminate\Http\Request;

class meetingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('meeting1', [
            'Meeting' => meeting::all()
        ]);
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
