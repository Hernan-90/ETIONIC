<?php

namespace App\Http\Controllers;

use App\API;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use GuzzleHttp\Client;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        define("CONSUMER_KEY","8uHLgxKs1ag66LPbomkYgyKY5");
        define("CONSUMER_SECRET","roGqZC8ZfJHIXbOAV75lJACFDXBIvtr7UxYAeDct7mqG2UQd5D");

        $acces_token = "1225875511982874624-tFPdus1ednpR5nEKX6RlEIySnlVHTg";
        $access_token_secret = "MLAvK3fTltFqUn0XVoeShQxPKEXTFwS13vMgjRQkiwUht";

        // CONSUMER_KEY, CONSUMER_SECRET, $acces_token, $access_token_secret

        $client = new Client([
          'base_url' => 'https://api.twitter.com/oauth/access_token',
          'auth' => 'oauth',
        ]);
        $response = $client->request('GET', 'https://api.twitter.com/oauth/access_token',
        [
          'consumer_key'    => CONSUMER_KEY,
          'consumer_secret' => CONSUMER_SECRET,
          'token'           => $acces_token,
          'token_secret'    => $access_token_secret,
        ]);

        // $client = new Client(['base_url' => 'https://api.twitter.com', 'defaults' => ['auth' => 'oauth']]);
        // $response = $client->request('GET',
        // [
        //   'consumer_key' => $twitter[]
        //   'consumer_secret' =>
        //   'token' =>
        //   'token_secret' =>
        // ]);

        // dd($connection);
        return view("/tweets");
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
        $request = request ();

        return redirect("/tweets");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function show(API $aPI)
    {
      // $data = Curl::to("https://api.twitter.com/1.1/users/show.json")->get();
      // $array = json_decode($data,true);
      //
      // return $array;// ACA DEVUELVO A LA VISTA EL ARARY
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function edit(API $aPI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, API $aPI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API  $aPI
     * @return \Illuminate\Http\Response
     */
    public function destroy(API $aPI)
    {
        //
    }
}
