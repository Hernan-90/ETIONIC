<?php

namespace App\Http\Controllers;

use Auth;
use App\Favoritos;
use Illuminate\Http\Request;

class FavoritosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TweetFavorito = Favoritos::where("user_id", Auth::user()->id)
                          ->where("Saved", 1)
                          ->get();
        return view("/favoritos", compact("TweetFavorito"));
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
        $Guardado = Favoritos::find($request->id);
        $TweetGuardado = new Favoritos;

        $TweetGuardado->User = $Guardado->user;
        $TweetGuardado->Tweet = $Guardado->tweet;
        $TweetGuardado->Followers = $Guardado->followers;
        $TweetGuardado->Likes = $Guardado->likes;
        $TweetGuardado->Saved = 1;
        $TweetGuardado->user_id =Auth::user()->id;

        $TweetGuardado->save();

        return redirect("/tweets");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favoritos  $favoritos
     * @return \Illuminate\Http\Response
     */
    public function show(Favoritos $favoritos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favoritos  $favoritos
     * @return \Illuminate\Http\Response
     */
    public function edit(Favoritos $favoritos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favoritos  $favoritos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favoritos $favoritos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Favoritos  $favoritos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favoritos $favoritos)
    {
        //
    }
    public function delete(Request $request)
    {
        $FavoritoBorrado = Favorito::find($request->id);
        $FavoritoBorrado->delete();

        return redirect("/favoritos");
    }
}
