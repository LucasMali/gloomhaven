<?php

namespace App\Http\Controllers;

use App\Achievements;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Achievements::all();
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
     * @param \App\Achievements $achievements
     * @param $id
     * @param $type
     * @return \Illuminate\Http\Response
     */
    public function show(Achievements $achievements, $id)
    {
        return $achievements->find($id);
    }

    public function showByType(Achievements $achievements, $type)
    {
        return $achievements->where('type', $type)->get();
    }

    public function showByCampaignId(Achievements $achievements, $campaignId)
    {
        return $achievements->where('campaign_id', $campaignId)->get();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Achievements  $achievements
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievements $achievements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Achievements  $achievements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievements $achievements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Achievements  $achievements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievements $achievements)
    {
        //
    }
}
