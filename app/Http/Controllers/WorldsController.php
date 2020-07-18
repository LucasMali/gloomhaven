<?php

namespace App\Http\Controllers;

use App\Worlds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WorldsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $worlds = DB::table('worlds')->get();
        $worlds = Worlds::with('parties')->paginate(10);
        return view('worlds.index')->with('worlds', $worlds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO make it so all data is based off of Auth::user()->id
        $users = DB::table('users')
            ->where('id', Auth::user()->id)
            ->get()->pluck('id')->prepend('none');
        $parties = DB::table('parties')
            ->where('users_id', Auth::user()->id)
            ->get()->pluck('id', 'world_id');
        $existing_worlds = DB::table('worlds')
            ->where('user_id', Auth::user()->id)
            ->get()->pluck('id', 'name');
        return view('worlds.create')
            ->with('users', $users)
            ->with('worlds', (new Worlds()))
            ->with('parties', $parties)
            ->with('existing_worlds', $existing_worlds);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $worlds = Worlds::create($request->input());
        Worlds::create([
            'user_id' => $request->input('user_id'),
            'name' => $request->input('name')
        ]);
        return redirect()->action('WorldsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Worlds  $world
     * @return \Illuminate\Http\Response
     */
    public function show(Worlds $world)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Worlds  $world
     * @return \Illuminate\Http\Response
     */
    public function edit(Worlds $world)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Worlds  $world
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worlds $world)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Worlds  $world
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worlds $world)
    {
        //
    }
}
