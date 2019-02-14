<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Process;

class ProcessController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:processes.index')->only('index');
        $this->middleware('permission:processes.create')->only(['create', 'store']);
        $this->middleware('permission:processes.edit')->only(['edit', 'update']);
        $this->middleware('permission:processes.show')->only('show');
        $this->middleware('permission:processes.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('processes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('processes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Process::rules());

        Process::create($request->all());

        return back()->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Process $process)
    {
        return view('processes.show', compact('process'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $process)
    {
        return view('processes.edit', compact('process'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Process $process)
    {
        $process->update($request->all());

        return redirect()->route('processes.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Process $process)
    {
        $process->delete();

        return back()->withSuccess(trans('app.success_destroy'));
    }
}
