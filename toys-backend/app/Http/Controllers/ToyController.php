<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Toy::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new Toy();

        $new->fill($request->only(['name']));
        $new->save();

        return response()->json($new, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toy  $toy
     * @return \Illuminate\Http\Response
     */
    public function show(Toy $toy)
    {
        return response()->json(Toy::findOrFail($toy->id), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toy  $toy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toy $toy)
    {
        $new = new Toy();

        $new->fill($request->only(['name']));
        $new->save();

        return response()->json($new, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toy  $toy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toy $toy)
    {
        return $toy->delete();
    }
}
