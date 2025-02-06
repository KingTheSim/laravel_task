<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Button;

class ButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Button::all();
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
        return Button::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Button $button)
    {
        $colors = ['red', 'blue', 'green', 'yellow', 'purple', 'teal', 'orange', 'pink', 'gray'];
        return view('buttons.edit', compact('button', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Button $button)
    {
        $request->validate([
            'title' => 'required|string|max:30',
            'link' => 'required|url',
            'color' => 'required|in:red,blue,green,yellow,purple,teal,orange,pink,gray',
        ]);
        $button->update([
            'title' => $request->title,
            'link' => $request->link,
            'color' => $request->color,
            'set' => true,
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
