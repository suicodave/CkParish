<?php

namespace App\Http\Controllers;

use App\Repositories\Confirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmationController extends Controller
{
    private $confirmation;

    function __construct(Confirmation $confirmation)
    {
        $this->confirmation = $confirmation;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $confirmations = $this->confirmation->paginate();

        return view('confirmation.index', [
            'confirmations' => $confirmations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('confirmation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();

        $attributes = $request->all();

        $attributes['created_by'] = $userId;

        $this->confirmation->create($attributes);

        return redirect()->route('confirmations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
