<?php

namespace App\Http\Controllers;

use App\Repositories\Confirmation;
use App\StaticPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmationController extends Controller
{
    private $confirmation;

    function __construct(Confirmation $confirmation)
    {
        $this->checkRoleOrPermissions(StaticPermission::VIEW_CONFIRMATION_COMPONENT)
            ->only(['index', 'show']);

        $this->checkRoleOrPermissions(StaticPermission::CREATE_CONFIRMATION)
            ->only(['create', 'store']);

        $this->checkRoleOrPermissions(StaticPermission::UPDATE_CONFIRMATION)
            ->only(['edit', 'update']);

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
        $attributes = $request->all();

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
        $confirmation = $this->confirmation->show($id);

        $confirmation['showOnly'] = true;

        return view('confirmation.create', $confirmation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $confirmation = $this->confirmation->show($id);

        return view('confirmation.create', $confirmation);
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
        $attributes = $request->all();

        $this->confirmation->update($attributes, $id);

        return redirect()->route('confirmations.index');
    }
}
