@extends('layouts.master')


@section('title')
    Lorem Ipsum Generator
@stop


{{--
  This is the child view for the Lorem Ipsum Generator page.  It uses some content from the master layout.  I
  removed the sections that I wasn't using - this page doesn't have it's own style sheet so no
  head section and no javascript so I didn't need the last body section.
--}}


@section('header')
<p><a href='/'>Home</a></p>
<br />
This is your random text generator.  Please enter the number of paragraphs you would like to generate.
@stop

@section('content')

<form method="POST" action="/lorem_ipsum">
  <input type='hidden' value='{{ csrf_token() }}' name='_token'>
  <!--This section has some code to make sure there is always a default value in the num paragraphs field.  Also it will put the value
  entered by the user back into the field after the form submit.-->
  <div class="form-group">
       <label for='numParagraphs'>Number of Paragraphs:</label>
       <input type="text" id='numParagraphs' name="numParagraphs" value="<?php if (isset($numParagraphs)) echo $numParagraphs; else echo '0'; ?>">
(Max: 99)
  </div>
   <br />
   <button type="submit" class="btn btn-primary btn-lg">Get Text</button>
</form>

@if (!isset($paragraphs[0])) <!--No paragraphs sent to the view so check for errors or prompt for user input-->
  <div id='randomText' class='no_result_box'>
    <h4>Get some text!</h4>
    @if(count($errors) > 0)
      <ul class='error_message'>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}  Please try again!</li>
        @endforeach
      </ul>
    @endif
  </div>
@else <!--Input is good, so display each paragraph-->
  <div id='randomText' class='result_box'>
  @foreach ($paragraphs as $value)
    <p>
      {{$value}}
    </p>
  @endforeach
  </div>

@endif
@stop
