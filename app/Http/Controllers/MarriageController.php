<?php

namespace App\Http\Controllers;

use App\Marriage;
use App\Priest;
use App\Repositories\Marriage as RepositoriesMarriage;
use App\StaticPermission;
use Illuminate\Http\Request;

class MarriageController extends Controller
{

    private $marriage;

    const REQUEST_ATTRIBUTES = [
        'customers.*.first_name' => 'required',
        'customers.*.role' => 'required',
        'customers.*.middle_name' => 'required',
        'customers.*.last_name' => 'required',
        'customers.*.citizenship' => 'required',
        'customers.*.religion' => 'required',
        'customers.*.residence' => 'required',
        'customers.*.birthdate' => 'required',
        'customers.*.sex' => 'required',
        'customers.*.parents.*.name'=>'filled',
        'priest_id'=>'required',
        'wedding_date'=>'required',
        'sponsors.*.name'=>'filled'
    ];

    function __construct(RepositoriesMarriage $marriage)
    {
        $this->checkRoleOrPermissions(StaticPermission::VIEW_BAPTISMAL_COMPONENT)
            ->only(['index', 'show']);

        $this->checkRoleOrPermissions(StaticPermission::CREATE_BAPTISMAL)
            ->only(['create', 'store']);

        $this->checkRoleOrPermissions(StaticPermission::UPDATE_BAPTISMAL)
            ->only(['edit', 'update']);

        $this->marriage = $marriage;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marriages = $this->marriage->with(['priest'])->paginate();

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
        $priests = Priest::select(['id', 'name'])
            ->oldest('name')
            ->get();

        return view('marriage.create',[
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

        $priests = Priest::select(['id', 'name'])
            ->oldest('name')
            ->get();

        return view('marriage.create', $marriage,[
            'priests'=>$priests
        ]);
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
        $request->validate(self::REQUEST_ATTRIBUTES);
        
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
