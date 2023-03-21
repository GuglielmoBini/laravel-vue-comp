<?php

namespace App\Http\Controllers\Api;

use App\Models\Videogame;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Videogames = Videogame::orderBy('updated_at', 'DESC')->get();

        //foreach ($Videogames as $Videogame) {
        //if ($Videogame->image_url) $Videogame->image_url = url('storage/' . $Videogame->image_url);
        //}

        return response()->json($Videogames);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $videogame = Videogame::find($id);
        if (!$videogame) return response(null, 404);


        // managing images reception: if game has an image, reassign image path value as complete path
        //if ($videogame->image_url) $videogame->image_url = url('storage/' . $videogame->image_url);


        return response()->json($videogame);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
