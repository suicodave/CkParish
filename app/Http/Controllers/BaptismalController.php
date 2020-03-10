<?php

namespace App\Http\Controllers;

use App\Priest;
use App\Repositories\Baptismal;
use App\StaticPermission;
use Illuminate\Http\Request;

class BaptismalController extends Controller
{
    private $baptismal;

    const REQUEST_ATTRIBUTES = [
        'first_name' => 'required',
        'middle_name' => 'required',
        'last_name' => 'required',
        'birthdate' => 'required',
        'sex' => 'required',
        'priest_id' => 'required',
        'baptismal_date' => 'required',
        'sponsors.*.name' => 'filled',
        'parents.*.name' => 'filled'
    ];

    function __construct(Baptismal $baptismal)
    {
        $this->checkRoleOrPermissions(StaticPermission::VIEW_BAPTISMAL_COMPONENT)
            ->only(['index', 'show']);

        $this->checkRoleOrPermissions(StaticPermission::CREATE_BAPTISMAL)
            ->only(['create', 'store']);

        $this->checkRoleOrPermissions(StaticPermission::UPDATE_BAPTISMAL)
            ->only(['edit', 'update']);

        $this->baptismal = $baptismal;
    }

    function index()
    {
        $baptismals = $this->baptismal->with(['priest'])->paginate();

        return view('baptismal.index', [
            'baptismals' => $baptismals
        ]);
    }

    function create()
    {
        $priests = Priest::select(['id', 'name'])
            ->oldest('name')
            ->get();

        return view('baptismal.create', [
            'priests' => $priests
        ]);
    }

    function store(Request $request)
    {
        $request->validate(self::REQUEST_ATTRIBUTES);

        $attributes = $request->all();

        $this->baptismal->create($attributes);

        return redirect()->route('baptismals.index');
    }


    function show($id)
    {
        $baptismal = $this->baptismal->show($id);

        $baptismal['showOnly'] = true;

        return view('baptismal.create', $baptismal);
    }

    function edit($id)
    {
        $baptismal = $this->baptismal->show($id);

        $priests = Priest::select(['id', 'name'])
            ->oldest('name')
            ->get();

        return view('baptismal.create', $baptismal, [
            'priests' => $priests
        ]);
    }

    function update(Request $request, $id)
    {
        $request->validate(self::REQUEST_ATTRIBUTES);

        $attributes = $request->all();

        $this->baptismal->update($attributes, $id);

        return redirect()->route('baptismals.index');
    }
}
