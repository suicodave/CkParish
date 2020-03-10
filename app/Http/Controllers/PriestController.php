<?php

namespace App\Http\Controllers;

use App\Priest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PriestController extends Controller
{
    function index()
    {
        $priests = Priest::with('creator:id,first_name,middle_name,last_name')->orderBy('name', 'asc')->paginate();

        return view('priest.index', [
            'priests' => $priests
        ]);
    }

    function create()
    {
        return view('priest.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $priest = Priest::create([
            'name' => $request->name,
            'created_by' => Auth::id()
        ]);

        return redirect()->route('priests.index');
    }

    function show(Priest $priest)
    {
        return view('priest.create', [
            'priest' => $priest
        ]);
    }

    function update(Request $request, Priest $priest)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $priest->update([
            'name' => $request->name
        ]);

        return redirect()->route('priests.index');
    }
}
