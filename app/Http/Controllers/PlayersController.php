<?php

namespace App\Http\Controllers;

use App\Models\Players;
use App\Http\Requests\StorePlayersRequest;
use App\Http\Requests\UpdatePlayersRequest;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $players = Players::all();
        
        return response()->json($players);
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
     * @param  \App\Http\Requests\StorePlayersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlayersRequest $request)
    {
        //
        $request->validated([
            'name' => 'required',
            'position' => 'required',
            'age' => 'required',
        ]);

        $newPlayer = new Players([
            'name' => $request->name,
            'position' => $request->position,
            'age' => $request->age,
        ]);

        $newPlayer->save();

        return response()->json($newPlayer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Players  $players
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $player = Players::find($id);

        return response()->json($player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Players  $players
     * @return \Illuminate\Http\Response
     */
    public function edit(Players $players)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlayersRequest  $request
     * @param  \App\Models\Players  $players
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $player = Players::find($id);

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'age' => 'required',
        ]);

        $player->name =  $request->get('name');
        $player->position = $request->get('position');
        $player->age = $request->get('age');

        $player->save();

        return response()->json($player);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Players  $players
     * @return \Illuminate\Http\Response
     */
    public function destroy(Players $players)
    {
        //
    }
}
