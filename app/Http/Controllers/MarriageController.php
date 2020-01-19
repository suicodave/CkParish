<?php

namespace App\Http\Controllers;

use App\Marriage;
use App\Repositories\Marriage as RepositoriesMarriage;
use Illuminate\Http\Request;

class MarriageController extends Controller
{

    private $marriage;

    function __construct(RepositoriesMarriage $marriage)
    {
        $this->marriage = $marriage;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marriages = $this->marriage->paginate();

        return view('marriage.index', [
            'marriages' => $marriages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marriage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->all();

        $this->marriage->create($attributes);

        return redirect()->route('marriages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marriage = $this->marriage->show($id);

        $marriage['showOnly'] = true;

        return view('marriage.create', $marriage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marriage = $this->marriage->show($id);

        return view('marriage.create', $marriage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $marriage)
    {
        $attributes = $request->all();

        $this->marriage->update($attributes, $marriage);

        return redirect()->route('marriages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marriage $marriage)
    {
        //
    }
}
