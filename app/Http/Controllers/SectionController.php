<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Strand;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::with('strand')->get();
        return view('sections.index', compact('sections'));
    }

    public function create()
    {
        $strands = Strand::all();
        return view('sections.create', compact('strands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'strand_id' => 'required|exists:strands,id',
        ]);
        Section::create($request->all());
        return redirect()->route('sections.index');
    }

    public function show(Section $section)
    {
        return view('sections.show', compact('section'));
    }

    public function edit(Section $section)
    {
        $strands = Strand::all();
        return view('sections.edit', compact('section', 'strands'));
    }

    public function update(Request $request, Section $section)
    {
        $request->validate([
            'name' => 'required',
            'strand_id' => 'required|exists:strands,id',
        ]);
        $section->update($request->all());
        return redirect()->route('sections.index');
    }

    public function destroy(Section $section)
    {
        $section->delete();
        return redirect()->route('sections.index');
    }
}

