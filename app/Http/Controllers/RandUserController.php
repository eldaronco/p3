<?php
/** This is the Controller for the random user generator */
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
/* Validation - make sure the input is between 0 and 99 and is an integer */
        $this->validate($request, [
                'numUsers' => 'required|integer|max:99|min:0',
            ]);
/* The Faker package that was installed for the project */
        $faker = \Faker\Factory::create();
        $name_array = array();
        for ($i=0; $i < $numUsers; $i++) {
          $name_array[$i] = $faker->name;
        }
        return view('RandUser.users')->with('name_array', $name_array)->with('numUsers', $numUsers);
    }
    /**
     * Display the input form.  This responds to GET /random_user
     */
    public function getUsers()
    {
      return view('RandUser.users');
    }

}
