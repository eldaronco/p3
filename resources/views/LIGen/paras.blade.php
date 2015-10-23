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

<p><a href='/'>Home</a><p>
  <br />
@section('header')

This is your random text generator.  Please enter the number of paragraphs you would like to generate.
@stop


@section('content')

<form method="POST" action="/lorem_ipsum">

   <input type='hidden' value='{{ csrf_token() }}' name='_token'>
<div class="form-group">

       <label for='numParagraphs'>Number of Paragraphs:</label>
       <input type="text" id='numParagraphs' name="numParagraphs" value="<?php if (isset($numParagraphs)) echo $numParagraphs; else echo '0'; ?>">
(Max: 99)

</div>
   <br />
   <button type="submit" class="btn btn-primary btn-lg">Get Text</button>
</form>
@if (!isset($paragraphs[0]))
<div id='randomText' name='randomText' class='no_result_box'>
<h4>Get some text!</h4>
@if(count($errors) > 0)
<ul class='error_message'>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}  Please try again!</li>
    @endforeach
</ul>
@endif
</div>
@else

<div id='randomText' name='randomText' class='result_box'>
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
