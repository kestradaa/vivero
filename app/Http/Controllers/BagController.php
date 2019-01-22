<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bag;

class BagController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:bags.index')->only('index');
        $this->middleware('permission:bags.create')->only(['create', 'store']);
        $this->middleware('permission:bags.edit')->only(['edit', 'update']);
        $this->middleware('permission:bags.show')->only('show');
        $this->middleware('permission:bags.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bags.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Bag::rules());

        $bag = Bag::create($request->all());

        return back()->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bag $bag)
    {
        return view('bags.show', compact('bag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bag $bag)
    {
        return view('bags.edit', compact('bag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bag $bag)
    {
        $bag->update($request->all());

        return redirect()->route('bags.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bag $bag)
    {
        $bag->delete();

        return back()->withSuccess(trans('app.success_destroy'));
    }
}
