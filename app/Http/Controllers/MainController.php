<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\artical_paper;

class MainController extends Controller
{
    public function home() 
    {
        $artical_paper = new artical_paper();
        return view('home', ["artical_paper" => $artical_paper->all()]);
    }

    public function addArtical() {
        return view('addArtical');
    }

    public function formAdd_check(Request $request1) 
    {
        $valid1 = $request1->validate([
            'name' => 'required|min:1|max:100',
            'description' => 'required|min:1|max:100',
            'text' => 'required|min:1|max:5000'
        ]);

        $artical_paprer = new artical_paper();
        $artical_paprer->name = $request1->input('name');
        $artical_paprer->description = $request1->input('description');
        $artical_paprer->text = $request1->input('text');

        $artical_paprer->save();

        return redirect()->route('home');
    }

    public function formDel_check(Request $request2) 
    {
        $valid3 = $request2->validate([
        'id' => 'required|min:1|exists:artical_papers,id',
    ]);

        $id = $request2->id;
        artical_paper::find($id)->delete();
        return redirect()->route('home');
    }

    public function formUpd_check(Request $request3) 
    {
        $valid3 = $request3->validate([
            'id' => 'required|min:1|exists:artical_papers,id',
            'name' => 'required|min:1|max:100',
            'description' => 'required|min:1|max:100',
            'text' => 'required|min:1|max:5000'
        ]);
        $id = $request3->id;

        $artical_paprer = artical_paper::find($id);
        $artical_paprer->name = $request3->input('name');
        $artical_paprer->description = $request3->input('description');
        $artical_paprer->text = $request3->input('text');

        $artical_paprer->save();
        return redirect()->route('home');
    }

    
    public function read_paper($id) 
    {
        $read_paper = new artical_paper();
        return view('read_paper', ["read_paper" => $read_paper->find($id)]);
    }
}
