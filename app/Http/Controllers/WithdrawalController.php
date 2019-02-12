<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Withdrawal;
use Illuminate\Support\Facades\Storage;

class WithdrawalController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:withdrawals.index')->only('index');
        $this->middleware('permission:withdrawals.create')->only(['create', 'store']);
        $this->middleware('permission:withdrawals.edit')->only(['edit', 'update']);
        $this->middleware('permission:withdrawals.show')->only('show');
        $this->middleware('permission:withdrawals.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('withdrawals.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('withdrawals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Withdrawal::rules());

        $withdrawal = Withdrawal::create($request->all());

        //IMAGE

        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $withdrawal->fill(['file' => asset($path)])->save();   
        } 

        return back()->withSuccess(trans('app.success_store'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Withdrawal $withdrawal)
    {
        return view('withdrawals.show', compact('withdrawal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Withdrawal $withdrawal)
    {
        return view('withdrawals.edit', compact('withdrawal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Withdrawal $withdrawal)
    {
        $withdrawal->update($request->all());

        //IMAGE

        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $withdrawal->fill(['file' => asset($path)])->save();   
        }

        return redirect()->route('withdrawals.index')->withSuccess(trans('app.success_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Withdrawal $withdrawal)
    {
        $withdrawal->delete();

        return back()->withSuccess(trans('app.success_destroy'));
    }
}