<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class RandUserController extends Controller
{

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUsers($numUsers)
    {
      //echo nl2br("Here is my random user page!\n");
      $faker = \Faker\Factory::create();

      for ($i=0; $i < $numUsers; $i++) {
      //echo nl2br($faker->name . "\n");
      $name = $faker->name;
      return view('RandUser.users')->with('name', $name);
      }

    }

}
