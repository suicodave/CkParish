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
        //
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
        return $this->marriage->create($attributes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function show(Marriage $marriage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function edit(Marriage $marriage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marriage  $marriage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marriage $marriage)
    {
        //
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
