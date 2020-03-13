<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller
{
    public function list()
    {
        $notes = Note::orderBy('id', 'desc')->paginate(5);
        return view('pages.list', compact('notes'));
    }

    public function create()
    {
//        $data = \View::make()
        return view('pages.create');
    }

    public function show($id)
    {
        $noteToShow = Note::find($id);
        return view('pages.show',['noteToShow'=>$noteToShow]);
    }

    public function edit($id)
    {
        $noteUpdate = Note::find($id);
        return view('pages.edit', compact('noteUpdate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $noteUpdate = Note::find($id);
        $noteUpdate->fill($request->all());
        $noteUpdate->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        Note::find($id)->delete();
        return redirect('/');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        Note::create($request->all());
        return redirect('/');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $notes = Note::where('title', 'like', '%' . $search . '%')->paginate(5);
        return view('pages.search', compact('notes'));
    }

}
