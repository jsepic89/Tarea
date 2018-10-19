<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $actors = Actor::all();

      return view("actors.actors")->with(compact("actors"));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }
    //
    // /**
    //  // * Display the specified resource.
    //  // *
    //  // * @param  int  $id
    //  // * @return \Illuminate\Http\Response
    //  // */



    public function search($actor)
    {
      $actor = Actor::where("first_name","LIKE", "%$actor%")
      ->orwhere("last_name", "LIKE", "%$actor%")
      ->get();

      return view("actors.result")->with(compact("actor"));
    }






    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }
    //
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
