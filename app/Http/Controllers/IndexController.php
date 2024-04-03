<?php

namespace App\Http\Controllers;
use App\Models\Nauka;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index() {
        $nauka = Nauka::all();

        return view('index')->with(['nauka'=>$nauka]);
    }

    public function Heading($head) {
        $rubrics = Nauka::where('rubrics', $head)->get();
        return view('rubrika')->with(['rubrics' => $rubrics, 'head' => $head]);
    }

    public function Article($id) {
        $article = Nauka::where('id', $id)->first();
        return view('statya')->with(['article' => $article]);
    }

    public function Add() {
        $rubrics = Nauka::select('rubrics')->get();
        return view('add')->with(['rubrics' => $rubrics]);
    }

    public function Submit(Request $request) {
        $statya = new Nauka;
        $statya->fill($request->all());
        $statya->save();
        return redirect()->route('articles', ['id' => $statya->id]);
    }

    public function Delete($id) 
    {
        $statya = Nauka::find($id);
        $statya->delete(); 
        return redirect('/public');
    }
   
}
