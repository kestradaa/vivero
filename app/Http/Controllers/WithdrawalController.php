<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Withdrawal;

class WithdrawalController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:whitdrawals.index')->only('index');
        $this->middleware('permission:whitdrawals.create')->only(['create', 'store']);
        $this->middleware('permission:whitdrawals.edit')->only(['edit', 'update']);
        $this->middleware('permission:whitdrawals.show')->only('show');
        $this->middleware('permission:whitdrawals.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('whitdrawals.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('whitdrawals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Whitdrawal::rules());

        $whitdrawal = Whitdrawal::create($request->all());

        return back()->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Whitdrawal $whitdrawal)
    {
        return view('whitdrawals.show', compact('whitdrawal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Whitdrawal $whitdrawal)
    {
        return view('whitdrawals.edit', compact('whitdrawal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Whitdrawal $whitdrawal)
    {
        $whitdrawal->update($request->all());

        return redirect()->route('whitdrawals.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whitdrawal $whitdrawal)
    {
        $whitdrawal->delete();

        return back()->withSuccess(trans('app.success_destroy'));
    }
}