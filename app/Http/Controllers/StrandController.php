<?php

namespace App\Http\Controllers;

use App\Models\Strand;
use Illuminate\Http\Request;



class StrandController extends Controller
{
    public function index()
    {
        $strands = Strand::all();
        return view('strands.index', compact('strands'));
    }

    public function create()
    {
        return view('strands.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Strand::create($request->all());
        return redirect()->route('strands.index');
    }

    public function show(Strand $strand)
    {
        return view('strands.show', compact('strand'));
    }

    public function edit(Strand $strand)
    {
        return view('strands.edit', compact('strand'));
    }

    public function update(Request $request, Strand $strand)
    {
        $request->validate(['name' => 'required']);
        $strand->update($request->all());
        return redirect()->route('strands.index');
    }

    public function destroy(Strand $strand)
    {
        $strand->delete();
        return redirect()->route('strands.index');
    }
}
