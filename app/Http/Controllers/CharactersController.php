<?php

namespace App\Http\Controllers;

use App\Characters;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function show(Characters $characters, $id)
    {
        return $characters->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function edit(Characters $characters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Characters $characters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Characters $characters)
    {
        //
    }

    /**
     * Undocumented function
     *
     * @param [type] $userId
     * @return void
     */
    public function showWithUserId(Characters $characters, $userId)
    {
        return $characters->where('user_id', $userId);
    }
}
