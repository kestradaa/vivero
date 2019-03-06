<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plant;

class PlantController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:plants.index')->only('index');
        $this->middleware('permission:plants.create')->only(['create', 'store']);
        $this->middleware('permission:plants.edit')->only(['edit', 'update']);
        $this->middleware('permission:plants.show')->only('show');
        $this->middleware('permission:plants.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('plants.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $processes = Process::all();
        return view('plants.create', compact('processes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Plant::rules());

        $plant = Plant::create($request->all());

        $plant->Process()->sync($request->processes);

        return back()->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        $processes = Process::all();
        return view('plants.show', compact('plant', 'processes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        $processes = Process::all();
        return view('plants.edit', compact('plant', 'processes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant)
    {
        $this->validate($request, Plant::rules(true, $plant->id));

        $plant->update($request->all());

        $plant->processes()->sync($request->processes);

        return redirect()->route('plants.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        $plant->delete();

        return back()->withSuccess(trans('app.success_destroy'));
    }
}
