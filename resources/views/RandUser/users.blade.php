@extends('layouts.master')

{{--
  This is the view for the User Generator page.  It uses some content from the master layout.  I
  removed the sections that I wasn't using - this page doesn't have it's own style sheet so no
  head section and no javascript so I didn't need the last body section.
--}}

@section('title')
    User Generator
@stop


@section('header')
<p><a href='/'>Home</a></p>
<br />
This is your random user generator.  Please enter the number of names you would like to generate!
@stop

@section('content')

<form method="POST" action="/random_user">

  <input type='hidden' value='{{ csrf_token() }}' name='_token'>

<!--This section has some code to make sure there is always a default value in the num users field.  Also it will put the value
entered by the user back into the field after the form submit.-->
  <fieldset>
    <label for='numUsers'>Number of Users:</label>
    <input type="text" id='numUsers' name="numUsers" value="<?php if (isset($numUsers)) echo $numUsers; else echo '0'; ?>">
    (Max: 99)
  </fieldset>

  <br />
  <button type="submit" class="btn btn-primary btn-lg">Get Users</button>
</form>

@if (!isset($name_array[0])) <!--No names submitted-->
  <div id='names' class='no_result_box'>
    <h4>Get some names!</h4>
<!--Display error messages on the screen if validation fails -->
    @if(count($errors) > 0)
      <ul class='error_message'>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}  Please try again!</li>
      @endforeach
      </ul>
      @endif
  </div>
@else <!--All is well so display the names from the arrray -->
  <div id='names' class='result_box'>
  @foreach ($name_array as $value)
    <p>
      {{$value}}
    </p>
  @endforeach
  </div>
@endif

@stop
