<?php

namespace App\Http\Controllers;

use App\Models\Recyclebin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecyclebinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patients.recycle-bin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recyclebin  $recyclebin
     * @return \Illuminate\Http\Response
     */
    public function show(Recyclebin $recyclebin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recyclebin  $recyclebin
     * @return \Illuminate\Http\Response
     */
    public function edit(Recyclebin $recyclebin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recyclebin  $recyclebin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recyclebin $recyclebin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recyclebin  $recyclebin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recyclebin $recyclebin)
    {
        //
    }
}
