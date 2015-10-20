@extends('layouts.master')


@section('title')
    Lorem Ipsum Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')

@stop


@section('content')
<form method="POST" action="/lorem_ipsum">

   <input type='hidden' value='{{ csrf_token() }}' name='_token'>

   <fieldset>
       <label for='numParagraphs'>Number of Paragraphs:</label>
       <input type="text" id='numParagraphs' name="numParagraphs">

   </fieldset>

   <br />
   <button type="submit" class="btn btn-primary">Get Text</button>
</form>
@if (!isset($paragraphs[0]))
<div id='randomText' name='randomText'>
<h4>Get some text!</h4>
</div>
@else

<div id='randomText' name='randomText'>
  @foreach ($paragraphs as $value)
  <p>
    {{$value}}
  </p>

  @endforeach
 </div>



</div>
@endif
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
