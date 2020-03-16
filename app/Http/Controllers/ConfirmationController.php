<?php

namespace App\Http\Controllers;

use App\Priest;
use App\Repositories\Confirmation;
use App\StaticPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmationController extends Controller
{
    private $confirmation;

    const REQUEST_ATTRIBUTES = [
        'first_name' => 'required',
        'middle_name' => 'required',
        'last_name' => 'required',
        'birthdate' => 'required',
        'sex' => 'required',
        'priest_id' => 'required',
        'confirmation_date' => 'required',
        'sponsors.*.name' => 'filled',
        'parents.*.name' => 'filled'
    ];

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
        $confirmations = $this->confirmation->with(['priest'])
            ->paginate();

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
        $priests = Priest::select(['id', 'name'])
            ->oldest('name')
            ->get();

        return view('confirmation.create', [
            'priests' => $priests
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(self::REQUEST_ATTRIBUTES);

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

        $priests = Priest::select(['id', 'name'])
            ->oldest('name')
            ->get();

        return view('confirmation.create', $confirmation,[
            'priests'=>$priests
        ]);
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
        $request->validate(self::REQUEST_ATTRIBUTES);

        $attributes = $request->all();

        $this->confirmation->update($attributes, $id);

        return redirect()->route('confirmations.index');
    }
}
