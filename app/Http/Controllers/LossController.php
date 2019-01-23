<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loss;

class LossController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:losses.index')->only('index');
        $this->middleware('permission:losses.create')->only(['create', 'store']);
        $this->middleware('permission:losses.edit')->only(['edit', 'update']);
        $this->middleware('permission:losses.show')->only('show');
        $this->middleware('permission:losses.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('losses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('losses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Loss::rules());

        $loss = Loss::create($request->all());

        return back()->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Loss $loss)
    {
        return view('losses.show', compact('loss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Loss $loss)
    {
        return view('losses.edit', compact('loss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loss $loss)
    {
        $loss->update($request->all());

        return redirect()->route('losses.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loss $loss)
    {
        $loss->delete();

        return back()->withSuccess(trans('app.success_destroy'));
    }
}
