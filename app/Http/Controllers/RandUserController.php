<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class RandUserController extends Controller
{
    /**
     * Responds to requests to POST /random_user
     */
    public function postNumUsers(Request $request) {
        $numUsers = $request->input('numUsers');

        //echo nl2br("Here is my random user page!\n");
        $faker = \Faker\Factory::create();
        $names = "";
        for ($i=0; $i < $numUsers; $i++) {
          $name_array[$i] = $faker->name;
        }
       //echo $name_array[2];
        return view('RandUser.users')->with('name_array', $name_array);

    }
    /**
     * Display the input form.
     *
     *
     */
    public function getUsers()
    {
      return view('RandUser.users');
    }

}
