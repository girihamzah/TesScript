<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Epresences;

class EpresencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $epresences = Post::all();
        return response()->json($epresences);

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
     * @param  \App\Models\Epresences  $epresences
     * @return \Illuminate\Http\Response
     */
    public function show(Epresences $epresences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\s\Epresences  $epresences
     * @return \Illuminate\Http\Response
     */
    public function edit(Epresences $epresences)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\s\Epresences  $epresences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Epresences $epresences)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\s\Epresences  $epresences
     * @return \Illuminate\Http\Response
     */
    public function destroy(Epresences $epresences)
    {
        //
    }
}
