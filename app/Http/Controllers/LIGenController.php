<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LIGenController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postNumParas(Request $request)
    {
      $numParagraphs = $request->input('numParagraphs');
      $generator = new \Badcow\LoremIpsum\Generator();
      $paragraphs = $generator->getParagraphs($numParagraphs);      
      return view('LiGen.paras')->with('paragraphs', $paragraphs);
    }


    /**
     * Display the input form.
     *
     *
     */
    public function getParas()
    {
      return view('LIGen.paras');
    }
}
