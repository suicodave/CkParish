<?php

namespace App\Http\Controllers;

use App\Repositories\Baptismal;
use App\StaticPermission;
use Illuminate\Http\Request;

class BaptismalController extends Controller
{
    private $baptismal;

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
        $baptismals = $this->baptismal->paginate();

        return view('baptismal.index', [
            'baptismals' => $baptismals
        ]);
    }

    function create()
    {
        return view('baptismal.create');
    }

    function store(Request $request)
    {
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

        return view('baptismal.create', $baptismal);
    }

    function update(Request $request, $id)
    {
        $attributes = $request->all();

        $this->baptismal->update($attributes, $id);

        return redirect()->route('baptismals.index');
    }
}
