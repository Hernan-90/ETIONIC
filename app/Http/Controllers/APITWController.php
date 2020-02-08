<?php

namespace App\Http\Controllers;

use App\APITWController;
use Illuminate\Http\Request;

class APITWControllerController extends Controller
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
     * @param  \App\APITWController  $aPITWController
     * @return \Illuminate\Http\Response
     */
    public function show(APITWController $aPITWController)
    {
      $data = Curl::to("https://publish.twitter.com/oembed?")
              ->get();
      dd(jason_decode($data,true));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\APITWController  $aPITWController
     * @return \Illuminate\Http\Response
     */
    public function edit(APITWController $aPITWController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\APITWController  $aPITWController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, APITWController $aPITWController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\APITWController  $aPITWController
     * @return \Illuminate\Http\Response
     */
    public function destroy(APITWController $aPITWController)
    {
        //
    }
}
