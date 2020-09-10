<?php

namespace App\Http\Controllers;

use App\Contracts\World\WorldServiceInterface;
use App\World;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class WorldsController extends Controller
{
    /**
     * @var WorldServiceInterface
     */
    private $worldService;

    /**
     * Create a new controller instance.
     *
     * @param WorldServiceInterface $worldService
     */
    public function __construct(WorldServiceInterface $worldService)
    {
        $this->worldService = $worldService;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        $worlds = $this->worldService->loadWorlds(Auth::user()->id);
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
            ->where('user_id', Auth::user()->id)
            ->get()->pluck('id', 'world_id');
        $existing_worlds = DB::table('worlds')
            ->where('user_id', Auth::user()->id)
            ->get()->pluck('id', 'name');
        return view('worlds.create')
            ->with('users', $users)
            ->with('world', (new World()))
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

        // $world = World::create($request->input());
        World::create([
            'user_id' => $request->input('user_id'),
            'name' => $request->input('name')
        ]);
        return redirect()->action('WorldsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\World  $world
     * @return \Illuminate\Http\Response
     */
    public function show(World $world)
    {
        return view('worlds.show', ['world' => $world]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\World  $world
     * @return \Illuminate\Http\Response
     */
    public function edit(World $world)
    {
        $users = DB::table('users')
            ->where('id', Auth::user()->id)
            ->get()->pluck('id')->prepend('none');

        $parties = DB::table('parties')
            ->where('user_id', Auth::user()->id)
            ->where('world_id', $world->id)
            ->get();

        return view('worlds.edit')
            ->with('users', $users)
            ->with('world', $world)
            ->with('parties', $parties);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\World  $world
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, World $world)
    {
        $world->fill($request->input())->save();
        return redirect()->action('WorldsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\World  $world
     * @return \Illuminate\Http\Response
     */
    public function destroy(World $world)
    {
        $world->delete();
        return redirect()->action('WorldsController@index');
    }
}
