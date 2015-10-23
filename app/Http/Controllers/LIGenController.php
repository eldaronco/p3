<?php
/** This is the controller for the lorem ipsum generator **/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LIGenController extends Controller
{

  /**
   * Responds to requests to POST /lorem_ipsum
   */
    public function postNumParas(Request $request)
    {
      $numParagraphs = $request->input('numParagraphs');
      /* Validation to make sure the input is between 0 and 99 and is an integer */
      $this->validate($request, [
              'numParagraphs' => 'required|integer|max:99|min:0',
          ]);
      /* This is the LoremIpsum generator package function installed for the project */
      $generator = new \Badcow\LoremIpsum\Generator();
      $paragraphs = $generator->getParagraphs($numParagraphs);
      /* Sending back the numparagraphs as well so it can be re-entered in the input field after the post */
      return view('LIGen.paras')->with('paragraphs', $paragraphs)->with('numParagraphs', $numParagraphs) ;
    }


    /**
     * Display the input form.  Responds to requests to GET /lorem_ipsum
     */
    public function getParas()
    {
      return view('LIGen.paras');
    }
}
